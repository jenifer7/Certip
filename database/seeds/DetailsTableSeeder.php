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
                'quantity' => 2,
                'price' => 10, 
            ],
            [
                'sale_id' => 2,
                'product_id' => 2,
                'quantity' => 3,
                'price' => 20,  
            ],
        ];
        DB::table('details')->insert($detalle);
    }
}
