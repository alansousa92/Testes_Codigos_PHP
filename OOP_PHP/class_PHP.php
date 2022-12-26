<?php
require 'dd.php';

class Tarefa {

    public $descricao;
    public $completed = false;

    public function __construct($descricao) {
        $this->descricao = $descricao;
    }

    public function complete() {
        $this->completed = true;
    }

    public function isCompleted() {
        return $this->completed;
    }
}

/*
$tarefa = new Tarefa('Go to the store');
$tarefa->complete();

dd($tarefa->isCompleted());
 */

$tarefas = [
    new Tarefa('Terminando os Estudos de PHP.'),
    new Tarefa('Praticar mais HTML e CSS.'),
    new Tarefa('Desenvolver meu Portfolio.')
];

$tarefas[0]->complete();

//dd($tarefa);
require 'view.php';
