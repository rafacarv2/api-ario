<?php

namespace App\Http\Resources;

use App\Models\Planta;
use App\Models\Polinizacao;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class AbelhaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'abelha_id' => $this->id,
            'nome_abelha' => $this->nome,
            'nome_cientifico' => $this->nome_cientifico,
            'plantas_polinizadas' => DB::table('polinizacao')
                ->join('abelha', 'abelha.id', '=', 'polinizacao.abelha_id')
                ->join('planta', 'planta.id', '=', 'polinizacao.planta_id')
                ->select('planta.id as planta_id', 'planta.nome as planta_nome')
                ->where('abelha.id', '=', $this->id)
                ->get(),
        ];
    }
}
