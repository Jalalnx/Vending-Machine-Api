<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SallerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

         return [
        'id' => $this->id,
        'firstname' => $this->firstname,
        'lastname' => $this->lastname,
        'username' => $this->username,
        'address' => $this->address,
        'city' => $this->city,
        'email' => $this->email,
        'gender' => $this->gender,
        'created_at' => (string) $this->created_at,
        'updated_at' => (string) $this->updated_at
      ];
    }
}