<?php

namespace App\Http\Controllers;

use App\Http\Resources\FloracaoResource;
use App\Models\Planta;
use App\Models\Mes;
use App\Models\Floracao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FloracaoController extends Controller
{
    public function index()
    {
        $result = DB::table('floracao')
            ->join('planta', 'planta.id', '=', 'floracao.planta_id')
            ->join('mes', 'mes.id', '=', 'floracao.mes_id')
            ->selectRaw('mes.id as mes_id, mes.nome mes_nome, group_concat(planta.nome separator ", " ) as plantas')
            ->wherein('floracao.mes_id', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12])
            ->groupBy('mes.id')
            ->get();

        return $result;
    }


    public function store()
    {
    }


    public function show($meses)
    {
        $arrayMeses = json_decode($meses, true);

        $result = DB::table('floracao')
            ->join('planta', 'planta.id', '=', 'floracao.planta_id')
            ->join('mes', 'mes.id', '=', 'floracao.mes_id')
            ->selectRaw('mes.id as mes_id, mes.nome mes_nome, group_concat(planta.nome separator ", " ) as plantas')
            ->wherein('floracao.mes_id', $arrayMeses)
            ->groupBy('mes.id')
            ->get();

        return $result;
    }


    public function update()
    {
    }


    public function destroy()
    {
    }
}
