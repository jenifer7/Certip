<?php

use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $venta = [
            [
                'employee_id' => 1,
                'date_sale' => '2019-10-05',
                'customer_id' => 1,
                'product_id' => 1,
            ],
            [
                'employee_id' => 2,
                'date_sale' => '2019-10-05',
                'customer_id' => 2,
                'product_id' => 2,
            ],
        ];
        DB::table('sales')->insert($venta);
    }
}
