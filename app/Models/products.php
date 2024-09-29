<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class products extends Model
{
    use HasFactory;
    public function getList() {
        $products = DB::table('products')->get();

        return $products;
    }
    public function registproducts($data) {
        // 登録処理
        DB::table('products')->insert([
            'product_name' => $data->title,
            'img_path' => $data->url,
            'comment' => $data->comment,
            'company_id' => 1,
            'price' => $data->price,
            'stock' => $data->stock,
        ]);
    }
}
