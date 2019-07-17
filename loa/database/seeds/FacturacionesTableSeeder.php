<?php

use Illuminate\Database\Seeder;
use App\Modules\Facturacion;

class FacturacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Facturacion::class, 50)->create();
    }
}
