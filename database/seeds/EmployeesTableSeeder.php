<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empleado = [
            [
                'fullname' => 'Melany Ol',
                'position' => 'caja1',
                'phone' => '46558999',
                'address' => 'Barrio Nuevo',
                'gender' => 1,
                'user_id' => 1,
            ],
            [
                'fullname' => 'Ovidio Guzman',
                'position' => 'caja2',
                'phone' => '45121133',
                'address' => 'Col San Mateo 1',
                'gender' => 0,
                'user_id' => 2,
            ],
        ];
        DB::table('employees')->insert($empleado);
    }
}
