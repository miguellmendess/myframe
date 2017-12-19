<?php

namespace App\Controllers;

use MIG\Controller\Action;
use MIG\DI\Container;

class IndexController extends Action
{

    public function index()
    {

        $servicos = Container::getModel("Servico");
        $this->view->servicos = $servicos->fetchAll();
        $this->render('index');
    }

    public function contact()
    {
        $contatos = Container::getModel("Contato");
        $this->view->contatos = $contatos->find(2);
        //$this->view->eventos = array("Contato1","Contato2","Contato3");
        $this->render('contact');
    }


}