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
                'code' => '00001',
                'name' => 'Jugos del Monte',
                'description' => 'JugoLata 800 ml',
                'unit_price' => 10,
                'stock' => 30,
                'date_received' => '2019-10-01',
                'supplier_id' => 1,
            ],
            [
                'code' => '00002',
                'name' => 'Aceite IDEAL',
                'description' => 'BotellaIDEAL 800 ml',
                'unit_price' => 20,
                'stock' => 20,
                'date_received' => '2019-10-01',
                'supplier_id' => 2,
            ],
        ];
        DB::table('products')->insert($producto);
    }
}
