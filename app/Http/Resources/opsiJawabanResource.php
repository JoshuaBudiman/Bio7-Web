<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class opsiJawabanResource extends JsonResource
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
            'opsiJawaban_id' => $this -> opsiJawaban_id,
            'opsi_jawaban'=> $this -> opsi_jawaban,
            'opsi_istrue'=> $this -> opsi_istrue,
            'soal_id'=> $this -> soal_id,
        ];
    }
}
