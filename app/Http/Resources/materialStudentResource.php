<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class materialStudentResource extends JsonResource
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
            'material_student_id' => $this -> material_student_id,
            'student_id'=> $this -> student_id,
            'material_id'=> $this -> material_id,
        ];
    }
}
