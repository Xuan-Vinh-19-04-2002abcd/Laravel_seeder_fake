<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function index(){
        // $users = DB::select('SELECT * FROM product');
        $users = DB::table('product')->get();
        return view('welcome',compact('users'));
    }
}
