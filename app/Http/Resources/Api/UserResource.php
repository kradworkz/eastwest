<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'username' => $this->username,
            'email' => $this->email,
            'avatar' => $this->avatar,
            'role' => $this->role,
            'firstname' => $this->profile->firstname,
            'lastname' => $this->profile->lastname,
            'middlename' => $this->profile->middlename,
            'mobile' => $this->profile->mobile,
            'municipality' => ($this->role == 'Specialist') ? $this->specialist->municipality->name : '',
            'province' => ($this->role == 'Specialist') ? $this->specialist->municipality->province->name : '',
            'region' => ($this->role == 'Specialist') ? $this->specialist->municipality->province->region->name : '',
        ];
    }
}
