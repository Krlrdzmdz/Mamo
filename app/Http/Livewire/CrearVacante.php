<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearVacante extends Component
{

    public $titulo;
    public $salario;
    public $categoria;
    public $puesto;
    public $ultimo_dia;
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

        //Almacenar la imagen
        $imagen = $this->imagen->store('public/vacantes');
        //dd($imagen);
        $datos['imagen'] = str_replace('public/vacantes/', '', $imagen);

        //Crear la vacante
        Vacante::create([
            'titulo' => $datos['titulo'],
            'salario_id' => $datos['salario'],
            'categoria_id' => $datos['categoria'],
            'puesto' => $datos['puesto'],
            'ultimo_dia' => $datos['ultimo_dia'],
            'imagen' => $datos['imagen'],
            'user_id' => auth()->user()->id,
        ]);

        //Crear un mensaje
        session()->flash('mensaje', 'La vacante ha sido publicada correctamente');

        //Redireccionar al usuario
        return redirect()->route('vacantes.index');
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

