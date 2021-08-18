<?php
namespace App\Models;
use App\Models\ImpModelo;

class ImpModelo implements IModelo
{
    private $DAO;

    public function listar($filtro = null):Array{
        return [];
    }

    public function persistir($entidad): int
    {
        // TODO: Implement persistir() method.
        return 0;
    }

    public function eliminar($entidad): int
    {
        // TODO: Implement eliminar() method.
        return 0;
    }
}