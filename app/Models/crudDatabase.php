<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class crudDatabase extends Model
{
    protected $table = 'items';
    public function getAllData(){
        $listProduct =DB::table('slide')->get();
        return $listProduct;
    }
    public function getAllProduct()
    {
        $listProduct = DB::table('products')->get();
        return $listProduct;
    }
    public function getProduct($id){
        $listProduct = DB::table('products')->where('id',[$id])->first();
    }
    public function typeProduct(){
        $listType = DB::table('type_products')->get();
        return $listType;
    }
}
    