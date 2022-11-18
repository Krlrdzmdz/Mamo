<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearVacante extends Component
{

    public $titulo;
    public $salario;
    public $categoria;
    public $puesto;
    public $ultimo_dia;
    public $descripcion;
    public $imagen;

    use WithFileUploads;

    protected $rules =[
        'titulo' => 'required|string',
        'salario' => 'required',
        'categoria' => 'required',
        'puesto' => 'required',
        'ultimo_dia' => 'required',
        //'decripcion' => 'required',
        'imagen' => 'required|image|max:1024'

    ];

    public function crearVacante()
    {
        $datos = $this->validate();
    }
 
    public function render()
    {

        //Aqui consultamos la DB
        $salarios = Salario::all();
        $categorias = Categoria::all();
        
        return view('Livewire.crear-vacante', [
            'salarios' => $salarios,
            'categorias' => $categorias
        ]);
    }
}

