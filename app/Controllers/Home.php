<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		//return view('welcome_message');
        $impControlador = new ImpControlador();
        var_dump($impControlador);
        return $impControlador;
	}
}
