<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\V1\AuthorResource;

class PostResource extends JsonResource
{
    public static $wrap = 'posts';

    public function toArray($request)
    {
        return [
            'type'         => 'posts',
            'id'           => (string)$this->id,
            'attributes'   => [
                'title'       => $this->title,
                'description' => $this->description,
                'image'       => $this->image,
                'slug'        => $this->slug,
                'created_at'  => $this->created_at,
                'updated_at'  => $this->updated_at
            ],

            'relationships' => [
                'author'  => AuthorResource::make($this->user())
            ],

            'links' => [
                'self'    => route('posts.show', $this->id),
                'related' => route('posts.show', $this->slug)
            ]
        ];
    }

    public function with($request) {
        return [
         'status' => 'success'
        ];
     }

     public function withResponse($request, $response) {
        $response->header('Accept', 'application/json');
    }
}
