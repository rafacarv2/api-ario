<?php

namespace App\Http\Resources;

use App\Models\Abelha;
use App\Models\Planta;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class PolinizacaoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        return [
            'planta_id' => $this->id,
            'nome' => Planta::where('id', $this->id)->get('nome')

        ];
    }
}
