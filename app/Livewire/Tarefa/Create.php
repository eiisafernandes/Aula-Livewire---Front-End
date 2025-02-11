<?php

namespace App\Livewire\Tarefa;

use Livewire\Component;

class Create extends Component
{

    public $nome;
    public $data_hora;
    public $descricao;

    public function render()
    {
        return view('livewire.tarefa.create');
    }

    public function store (){
        dd($this->nome, $this->data_hora, $this->descricao);
    }
}
