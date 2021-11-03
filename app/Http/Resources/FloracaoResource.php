<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class FloracaoResource extends JsonResource
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
            'mes_id '=> $this->id,
            'mes_nome '=> $this->nome,
            'plantas_polinizadas' => DB::table('floracao')
                ->join('planta', 'planta.id', '=', 'floracao.planta_id')
                ->join('mes', 'mes.id', '=', 'floracao.mes_id')
                ->selectRaw('GROUP_CONCAT(planta.nome) as plantas_nomes')
                ->wherein('floracao.mes_id', [1,2,3,4])
                ->groupBy('mes.id')
                ->get(),
        ];
    }
}
