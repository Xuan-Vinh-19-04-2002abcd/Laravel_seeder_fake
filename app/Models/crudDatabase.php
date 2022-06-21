<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class crudDatabase extends Model
{
    protected $table = 'items';
    public function getAllData(){
        $listProduct =DB::table($this->table)->get();
        return $listProduct;
    }

}
