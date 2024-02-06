<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
               'product_code'=> 'SKUSKILDP',
               'product_name'=> 'So klin Lantai',
               'price'=> '15000',
               'currency'=> 'IDR',
               'discount'=> '',
               'dimension'=> '13cm x 10cm',
               'unit'=> 'PCS',
            ],

            [
                'product_code'=> 'SKUSKILDC',
                'product_name'=> 'So klin Gosok',
                'price'=> '20000',
                'currency'=> 'IDR',
                'discount'=> '4',
                'dimension'=> '13cm x 10cm',
                'unit'=> 'PCS',
             ],

        ];

        foreach ($product as $key => $value) {
            Product::create($value);
        }
    }
}
