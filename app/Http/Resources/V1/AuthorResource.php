<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthorResource extends JsonResource
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
            'type'    => 'Author',
            'id'      => $this->id,
            'name'    => $this->name,
            'role_id' => $this->role_id,
            'links'   => [
                'self' => route('users', $this->id)
            ]
        ];
    }
}
