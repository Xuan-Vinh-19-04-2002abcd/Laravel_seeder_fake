<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;
use Illuminate\Support\Facades\DB;
use App\Models\crudDatabase;
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
}
