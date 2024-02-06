<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    static function detail_product ($id) {
        $data = Product::where("id", $id)->first();

        return $data;
    }
}
