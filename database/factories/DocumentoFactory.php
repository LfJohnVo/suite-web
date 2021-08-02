<?php

namespace Database\Factories;

use App\Models\Documento;
use App\Models\Empleado;
use App\Models\Macroproceso;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Documento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $numero = 1;
        return [
            'codigo' => 'DC' . $numero++,
            'nombre' => 'Documento Proceso' . $numero,
            'tipo' => 'proceso',
            'macroproceso_id' => Macroproceso::all()->random()->id,
            'estatus' => Documento::PUBLICADO,
            'version' => '1',
            'fecha' => $this->faker->dateTime('now', null),
            'archivo' => $this->faker->file('public/storage/tmp/', 'public/storage/Documentos publicados/procesos', false),
            'elaboro_id' => Empleado::all()->random()->id,
            'reviso_id' => Empleado::all()->random()->id,
            'aprobo_id' => Empleado::all()->random()->id,
            'responsable_id' => Empleado::all()->random()->id,
        ];
    }
}
