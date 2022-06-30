<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\form_request;
class ProcessForm extends Controller
{
    public function index()
    {
        return view('Pages.form');
    }
    public function store(Request $request,form_request $res){
        $product = new Product();
        $name = '';
        $file = $request->file('inputImage');
        $name = time() . '_' . $file->getClientOriginalName();
        $destinationPath = public_path('/source/image/product');
        $file->move($destinationPath, $name);
        $arr =[
            'name' => $request->input('inputName'),
            'unit_price' => $request->input('inputPrice'),
            'promotion_price' => $request -> input('inputPromotionPrice'),
            'image' => $name,
            'unit' => $request->input('inputUnit'),
            'new' => $request -> input('inputNew'),
            'id_type' => $request -> input('inputType'),
            'description' => $request -> input('inputDescription')
        ];
        $product->InsertData($arr);
        return redirect()->route('showProduct');
    }
    public function showAdmin(){
        $table_product = new Product();
        $products = $table_product->index();
        // dd($products);
        return view('admin',compact('products'));
    }
    public function getID($id){
        $products = new Product();
        $product = $products->getDataToEdit($id);
        // dd($product);
        return view('Pages.formEdit',compact('product'));
    }
    public function Edit($id,Request $request,form_request $res){
        $product = new Product();
        $name = '';
        $file = $request->file('editImage');
        $name= time() . '_' . $file->getClientOriginalName();
        $destinationPath = public_path('/source/image/product');
        $file->move($destinationPath, $name);
        $arr = [
            'name' => $request->input('editName'),
            'unit_price' => $request->input('editPrice'),
            'promotion_price' => $request->input('editPromotionPrice'),
            'image' => $name,
            'unit' => $request->input('editUnit'),
            'new' => $request->input('editNew'),
            'id_type' => $request->input('editType'),
            'description' => $request->input('editDescription')
        ];
        $product->UpdateData($id,$arr);
        return redirect()->route('showProduct');
    }
    public function Delete($id){
        $product = new Product();
        $product->Destroy_product($id);
        return redirect()->route('showProduct');
    }
    public function Detail($id){
        $product = new Product();
        $sanpham = $product->getDataToEdit($id);
        return view('partical.deatail',compact('sanpham'));
    }
}   
