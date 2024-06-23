<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DoctorResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'age' => $this->age,
            'experience' => $this->experience,
            'patientsAppointed' => $this->patientsAppointed,
            'category' => $this->category,
        ];
    }
}

