<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Camera extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [

        'name'=> $this->name,
        'dvr_name'=> $this->name,
        ];
    }
}
