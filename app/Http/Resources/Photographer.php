<?php

namespace App\Http\Resources;

use App\Http\Resources\Album as AlbumResource;
use Illuminate\Http\Resources\Json\JsonResource;

class Photographer extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'phone' => $this->phone,
            'email'=> $this->email,
            'bio' => $this->bio,
            'profile_picture' => 'img/'.$this->profile_picture,
            'album' => AlbumResource::collection($this->albums)
        ];
    }
}
