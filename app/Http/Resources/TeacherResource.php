<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeacherResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'middlename' => $this->middlename,
            'suffix' => $this->suffix,
            'gender' => $this->gender,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'school' => $this->school,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
