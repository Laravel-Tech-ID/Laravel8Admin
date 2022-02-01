<?php

namespace Modules\Setting\Transformers\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'name' => $this->initial,
            'desc' => $this->description,
            'prefix' => $this->initial,
            'footerText' => $this->initial.' | All Rights Reserved 2020',
            'logoText' => $this->initial,
            'needLogin' => false            
        ];
    }
}
