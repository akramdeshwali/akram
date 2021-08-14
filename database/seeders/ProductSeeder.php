<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Nike Shoes',
                'price'=>'2500',
                'category'=>'Shoes',
                'gallary'=>'https://i0.wp.com/digital-photography-school.com/wp-content/uploads/2019/11/product_photography_tips_4.jpg?resize=1500%2C1001&ssl=1',
                'description'=>'Casual Shoes',
            ],
            [
                'name'=>'Crokry ',
                'price'=>'25000',
                'category'=>'utensils',
                'gallary'=>'https://miro.medium.com/max/1200/1*U5MTkNENt_wGtrLc8bi6MQ.jpeg',
                'description'=>'Designed Cups',
            ]
        ]);
    }
}
