<?php

namespace App\Http\Resources\Dummy;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class DummyResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'address' => Str::limit($this->address, 20, ' (...)'),
            'phone' => $this->phone,
            'amount' => $this->amount,
            'article' => $this->latestArticle?->title ?? 'undefined',
            'status' => $this->status?->name ?? 'undefined',
            'active' => (bool)!$this->deleted_at,
        ];
    }
}
