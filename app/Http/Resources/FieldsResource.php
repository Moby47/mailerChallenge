<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FieldsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
      // Custom fields specifications
       return [
        'id' => $this->id,
        'title' => $this->title,
        'type' => $this->type,
        'subscribers_id' => $this->subscribers_id,
        'created_at' => $this->created_at,
       // 'updated_at' => $this->updated_at,
    ];
    }
}
