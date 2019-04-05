<?php
namespace App\Core;

class Controller {
    protected function model($model)
    {
        $model = '\\App\\Models\\' . $model;

        if(is_subclass_of($model, '\\Illuminate\\Database\\Eloquent\\Model'))
        {
            return new $model;
        }

        throw new \Exception('Model not found');
    }

    protected function view($view, array $data = [] )
    {
        require_once __DIR__ . '/../../templates/' . $view . '.php';
    }
}