<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proveedor = [
            [
                'name' => 'Distribuidora RM',
                'phone' => '79881022',
                'address' => 'Esquipulas',
            ],
            [
                'name' => 'Distribuidora Arco',
                'phone' => '79121145',
                'address' => 'Esquipulas',
            ],
        ];
        DB::table('suppliers')->insert($proveedor);
    }
}
