<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'name' => $this->name,
          'price' => $this->hjual,
            'reting' => $this->review->count() > 0 ? round($this->review->sum('star')/$this->review->count(),2) : 'No reting yet',
            'herf'=>[
              'link' => route('products.show',$this->id)
            ]
        ];
    }
}
