<?php

use Illuminate\Database\Seeder;

class DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detalle = [
            [
                'sale_id' => 1,
                'product_id' => 1,
                'price_unit' => 10,
                'quantity' => 2,
                'sub_total' => 20,
                'total_sales' => 20,  
            ],
            [
                'sale_id' => 2,
                'product_id' => 2,
                'price_unit' => 20,
                'quantity' => 3,
                'sub_total' => 60,
                'total_sales' => 60,  
            ],
        ];
        DB::table('details')->insert($detalle);
    }
}
