<?php

use Illuminate\Database\Seeder;
use App\Modules\Departamento;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facultades = App\Modules\Facultad::all();
    	foreach ($facultades as $facultad) {
    		$cantidad = rand(2,4);
    		factory(Departamento::class, $cantidad)->create(['id_facultad' => $facultad->id]);
    	}
    }
}
