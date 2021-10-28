<?php


namespace App\Helpers;


class Product
{
    public static function active($active = 0)
    {
        return $active == 0 ? '<span class="btn btn-danger btn-xs ">NO</span>'
            : '<span class="btn btn-success btn-xs">YES</span>';
    }

    public static function list($products)
    {
        $html = '';

        foreach ($products as $key => $product) {

            $html .= '
                    <tr>
                        <td id="id" class="text-center">' . $product->id . '</td>
                        <td style="width: 150px;">' . $product->name . '</td>
                        <td>' . number_format($product->price) . '</td>
                        <td><a href="' . $product->thumb . '"  target="_blank"><img src="' . $product->thumb . '" width="100px"></a></td>
                        <td class="text-center">' . self::active($product->active) . '</td>
                        <td>' . $product->updated_at . '</td>
                        <td class="text-center">
                            <a class="btn btn-primary btn-sm" href="/admin/products/edit/' . $product->id . '">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm"
                                onclick="removeRow(' . $product->id . ', \'/admin/products/destroy\')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                ';
        }
        return $html;
    }

}
