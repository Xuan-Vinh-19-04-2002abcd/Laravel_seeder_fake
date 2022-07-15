<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\registerRequest;
use App\Models\crudDatabase;
use App\Models\User;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Auth;
use Session;

class ProductController extends Controller
{
    public function index(){
        // $users = DB::select('SELECT * FROM product');
        // $users = DB::table('product')->get();
        $slide = new crudDatabase();
        $listSlide = $slide->getAllData();
        $listProduct = $slide->getAllProduct() ;
        $listType = $slide->typeProduct();
        return view('Pages.trangchu', compact('listSlide','listProduct','listType'));
    }
    public function show($id){
        $slide = new crudDatabase();
        $listProduct = $slide->getProduct($id);
    }
    public function showRegister(){
        return view('Pages.register');
    }
    public function Register(Request $request,registerRequest $res){
                $register = new User();
                $register->name = $request->input('name');
                $register->email = $request->input('email');
                
                $register->password = bcrypt($request['password']);
                $register->save();
          
                
    }
    public function showLogin(){
        return view('Pages.login');
    }
    public function Login(Request $request){
        $login = [
            'email' => $request->input('email'),
            'password' => $request->input('pw')

        ];
        if (Auth::attempt($login)) {
            $user = Auth::user();
            Session::put('user', $user);
            echo '<script>alert("Đăng nhập thành công");window.location.assign("/");</script>';
        } else {
            echo '<script>alert("Đăng nhập thất bại");window.location.assign("/login");</script>';
        }

    }
    public function Logout()
    {
        Session::forget('user');
        Session::forget('cart');
        return redirect('/');
    }
}
