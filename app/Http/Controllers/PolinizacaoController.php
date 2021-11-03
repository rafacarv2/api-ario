<?php

namespace App\Http\Controllers;

use App\Http\Resources\AbelhaResource;
use App\Http\Resources\PolinizacaoResource;
use App\Models\Abelha;

use App\Models\Polinizacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PolinizacaoController extends Controller
{

    function viewLoad()
    {

//        $todasAbelhas =  AbelhaResource::collection(Abelha::all());
//
        $nome = Http::get('http://localhost/api/polinizacao')->json();
//        dd($nome);
        return view('polinizacao', ['abelhas' => '']);


    }

    public function index()
    {
        return AbelhaResource::collection(Abelha::all());
    }


    public function store()
    {
    }


    public function show($id)
    {
        return new AbelhaResource(Abelha::find($id));
    }


    public function update()
    {
    }


    public function destroy()
    {
    }
}
