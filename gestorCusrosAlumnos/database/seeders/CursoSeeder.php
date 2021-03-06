<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;


class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::factory(15)->create();
        Curso::factory(3)->Entregable::factory()->count(4)->create();
    }
}
