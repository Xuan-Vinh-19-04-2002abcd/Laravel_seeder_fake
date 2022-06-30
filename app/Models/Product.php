<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    public function InsertData($arr)
    {
        DB::table($this ->table)->insert($arr);
    }
    public function index()
    {
       $listproduct = DB::table($this->table)->simplePaginate(5);
       return $listproduct;
    }
    public function getDataToEdit($id)
    {
        $Product = DB::table($this->table)->where('id', [$id])->first();
        return $Product;
    }
    public function UpdateData($id,$arr)
    {
        DB::table($this->table)
        ->where('id', [$id])
            ->update($arr);
    }
    public function Destroy_product($id){
        DB::table($this->table)
            ->where('id', [$id])
            ->delete();
    }
 
}
//b1: xử lí model, gọi bảng
//b2: Xử lí controller, tạo các truy vấn, return compact .. biến
//b3: đổ dữ liệu ra view for each ... endforeach