<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $custom = [
            [
                'fullname' => 'Juan Polo',
                'phone' => '46557788',
                'address' => 'Aldea Atulapa',
                'nit' => '898988489',
            ],
            [
                'fullname' => 'Berta Maria',
                'phone' => '79181100',
                'address' => 'Aldea Atulapa',
                'nit' => '898556667',
            ],
        ];
        DB::table('customers')->insert($custom);
    }
}
