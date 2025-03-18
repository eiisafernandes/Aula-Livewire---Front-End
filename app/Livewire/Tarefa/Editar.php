<?php

namespace App\Livewire\Tarefa;

use App\Models\Tarefa;
use Livewire\Component;

class Editar extends Component
{
    //precisa do id pra fazer a pesquisa, pelo id passado pela rota
    public $tarefaId; 
    public $nome;
    public $data_hora;
    public $descricao;

    //vai ser executada quando o componete for chamado para fazer busca pelos dados do banco
    public function mount($id){
        $tarefa = Tarefa::find($id);

        $this->tarefaId = $tarefa->id;
        $this->nome = $tarefa->nome;
        $this->data_hora = $tarefa->data_hora;
        $this->descricao = $tarefa->descricao;
    }

    //gravar no banco
    public function salvar(){
        $tarefa = Tarefa::find($this->tarefaId);
        $tarefa->nome =$this->nome;
        $tarefa->data_hora = $this->data_hora;
        $tarefa->descricao = $this->descricao;

        $tarefa->save();
        session()->flash('success', 'Tarefa Atualizada');
    }

    public function render()
    {
        return view('livewire.tarefa.editar');
    }
}
