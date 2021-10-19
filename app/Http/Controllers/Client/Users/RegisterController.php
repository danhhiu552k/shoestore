<?php

namespace App\Http\Controllers\Client\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserFormRequest;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function store(CreateUserFormRequest $request)
    {
        if ($request->input('checked') == 'on') {
            $check = 1;
        } else {
            $check = 0;
        }
        try {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date =  date_default_timezone_get();
            if (!Customer::where('email', '=', $request->input('email'))->count() > 0) {
                Customer::create([
                    'firstname' => $request->input('firstname'),
                    'lastname' => $request->input('lastname'),
                    'email' => $request->input('email'),
                    'password' => bcrypt($request->input('password')),
                    'active' => 1,
                    'level' => 0,
                    'checked' => $check,
                    'created_at' =>  $date,
                    'updated_at' =>  $date
                ]);
            } else {
                Session::flash('error', 'Tài khoản đã tồn tại');
                return redirect()->back();
            }

            // if (Auth::attempt(
            //     [
            //         'email' => $request->input('email'),
            //         'password' => $request->input('password'),
            //         'active' => 1,
            //         'level' => 0
            //     ]
            // )) {
            //     // $name = Customer::select('name', 'id', 'email')->where('email', $request->input('email'))->first();
            //     // Session::put('admin_name', $name->name);
            //     // Session::put('admin_id', $name->id);
            //     // Session::put('admin_email', $name->email);
            //     // Session::flash('login', true);
            //     return redirect()->route('home');
            // }
            dd($request->input());
        } catch (\Exception $err) {
            Session::flash('error', 'Tạo Tài Khoản Lỗi: ' . $err->getMessage());
            return redirect()->back();
        }
    }
}
