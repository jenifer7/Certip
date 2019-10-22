<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = [
            [
                'name' => 'Jugos del Monte',
                'unit_price' => 10,
                'description' => 'JugoLata 800 ml',
                'stock' => 30,
                'date_received' => '2019-10-01',
                'supplier_id' => 1,
            ],
            [
                'name' => 'Aceite IDEAL',
                'unit_price' => 20,
                'description' => 'BotellaIDEAL 800 ml',
                'stock' => 20,
                'date_received' => '2019-10-01',
                'supplier_id' => 2,
            ],
        ];
        DB::table('products')->insert($producto);
    }
}
