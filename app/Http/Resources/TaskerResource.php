<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'full_name' => $this->full_name,
            'email' => $this->email,
            'profile' => env('APP_URL').$this->profile,
            'cost' => $this->cost,
            'work_time' => $this->work_time,
            'description' => $this->description,
            'total_rate' => $this->total_rate
        ];
    }
}
