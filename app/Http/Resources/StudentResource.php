<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
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
            'student_id' => $this -> student_id,
            'email'=> $this -> email,
            'password'=> $this -> password,
            'username' => $this -> username,
            'name'=> $this -> name,
            'school'=> $this -> school,
            'city' => $this -> city,
            'birthyear'=> $this -> birthyear,
        ];
    }
}
