<?php
namespace App\Models;

interface IModelo
{
   public function listar($filtro = null):Array;
   public function persistir($entidad):int;
   public function eliminar($entidad):int;

}