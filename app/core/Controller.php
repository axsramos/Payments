<?php

namespace app\core;

class Controller
{
  public function model($model)
  {
    require_once 'app/models/' . $model . '.php';

    $classe = 'app\\models\\' . $model;

    return new $classe();
  }

  public function view(string $view, $data = [])
  {
    require_once 'app/views/' . $view . '.php';
  }

  public function pageNotFound()
  {
    $this->view('erro404');
  }
}
