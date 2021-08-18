<?php
namespace App\Controllers;

interface IControlador
{
    public function ver():void;
    public function filtrarLista():void;
    public function filtraPredefinido();
    public function persistir():void;
    public function eliminar():void;
}