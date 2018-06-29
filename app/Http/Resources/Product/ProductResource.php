<?php

namespace App\Http\Resources\Product;
use App\Model\Review;
use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
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
          'description' => $this->detail,
          'price' =>$this->hjual,
          'stok' => $this->stok == 0 ? 'Out of Stock' : $this->stok,
          'reting' => $this->review->count() > 0 ? round($this->review->sum('star')/$this->review->count(),2) : 'No reting yet',
          'herf'=>[
            'reviews' => route('reviews.index',$this->id)
          ]
        ];
    }
}
