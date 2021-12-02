<?php


namespace App\Http\Services;


use App\Jobs\SendMail;
use App\Models\Cart;
use App\Models\Customercart;
use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class CartService
{
    public function addcartproduct($request)
    {
        $qty = (int)$request->input('quantity');
        $product_id = (int)$request->input('productid');
        $size = (int)$request->input('size');

        if ($qty <= 0 || $product_id <= 0) {
            Session::flash('error', 'Số lượng hoặc sản phẩm không chính xác');
            Session::flash('cart_add_error', 'Số lượng hoặc sản phẩm không chính xác');
            return false;
        }
//      Session::flush();
        $carts = Session::get('carts');

        if (is_null($carts)) {
            Session::put('carts', [
                $product_id . '-' . $size => $qty
            ]);

            return true;
        }

        $exists = Arr::exists($carts, $product_id . '-' . $size);
        if ($exists) {

            $carts[$product_id . '-' . $size] = $carts[$product_id . '-' . $size] + $qty;

            Session::put('carts', $carts);
            return true;
        }
        $carts[$product_id . '-' . $size] = $qty;
        Session::put('carts', $carts);
        return true;
    }

    public function getProduct()
    {
        $carts = Session::get('carts');
        if (is_null($carts)) return [];

        $productId = array_keys($carts);
        $product2Id = array();
        foreach ($productId as $item) {
            $product2Id[] = explode('-', $item)[0];
        }

        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1)
            ->whereIn('id', array_unique($product2Id))
            ->get();

    }

    public function update($request)
    {
        Session::put('carts', $request->input('num_product'));
    }

    public function remove($productid, $size)
    {
        $carts = Session::get('carts');
        unset($carts[$productid . '-' . $size]);
        Session::put('carts', $carts);
        return true;

    }

    public function addCarts($request)
    {
        try {
            DB::beginTransaction();
            $carts = Session::get('carts');
            if (is_null($carts)) return false;
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $date = date("Y-m-d H:i:s");
            $customer = Customercart::create([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'email' => $request->input('email'),
                'content' => $request->input('content'),
                'created_at' => $date,
                'updated_at' => $date
            ]);
            $this->infoProductCart($carts, $customer->id);
            DB::commit();

            Session::flash('success', 'Đặt hàng thành công');
            Session::flash('order_success', 'Đặt hàng thành công');
            Session::forget('carts');
        } catch (\Exception $err) {
            Session::flash('order_error', 'Đặt hàng lỗi');
            DB::rollBack();
            SendMail::dispatch($request->input('email'))->delay(now()->addSeconds(2));
            Session::forget('carts');
            return false;
        }
        return true;
    }

    public static function getProduct2($id)
    {
        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1)
            ->where('id', $id)
            ->get();
    }

    protected function infoProductCart($carts, $customer_id)
    {
        try {
            $data = [];
            foreach (array_keys($carts) as $item) {
                $id = explode('-', $item)[0];
                $size = explode('-', $item)[1];
                $product = self::getProduct2($id)[0];
                $price = $product->price_sale != 0 ? $product->price_sale : $product->price;
                $data[] = [
                    'customer_id' => $customer_id,
                    'product_id' => $product->id,
                    'pty' => $carts[$product->id . '-' . $size],
                    'price' => $price,
                    'size' => $size
                ];
            }

            Session::flash('order_success', 'Đặt hàng thành công');
            return Cart::insert($data);
        } catch (\Exception $err) {
            Session::flash('order_error', 'Đặt hàng lỗi');
            return false;
        }
    }

    public function getCustomer()
    {
        return Customercart::orderByDesc('id')->paginate(15);
    }

    public function getProductForCart($customer)
    {
        return $customer->carts()->with(['product' => function ($query) {
            $query->select('id', 'name', 'thumb');
        }])->get();

    }

}
