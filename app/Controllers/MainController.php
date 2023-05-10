<?php

namespace App\Controllers;
use App\Models\CrudModel;

class MainController extends BaseController
{
    public function index()
    {   
        $crud = new CrudModel();
        $names = $crud->getNames();
        $data = ["data" => $names];
        return view('show_list', $data);
    }

    public function create()
    {

    }

    public function update()
    {

    }

    public function updateGetUserById($id) 
    {
        $crud = new CrudModel();
        $name = $crud->getUserById($id);
        $data = ["data" => $name];
        return view('update', $data);
    }
}
