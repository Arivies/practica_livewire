<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;

class Productos extends Component
{
    public $descripcion,$cantidad,$id_producto;

    public function render()
    {
        return view('livewire.productos',['productos' =>  Producto::all()]);
    }

    public function crear(){
        $this->limpiar();
        $this->nuevo();
    }

    public function guardar(){
        Producto::updateOrCreate(['id'=>$this->id_producto],
            [
                'descripcion'=>$this->descripcion,
                'cantidad'=>$this->cantidad
            ]
        );
        $this->limpiar();
    }

    public function editar($id){

        $producto=Producto::findOrFail($id);
        $this->id_producto = $id;
        $this->descripcion = $producto->descripcion;
        $this->cantidad = $producto->cantidad;
    }

    public function borrar($id){
        Producto::find($id)->delete();
        $this->limpiar();
    }

    public function limpiar(){
        $this->cantidad='';
        $this->descripcion='';
        $this->id_producto='';
    }
}
