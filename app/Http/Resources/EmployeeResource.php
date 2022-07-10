<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
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
            'fistName' => $this->fist_name,
            'lastName' => $this->last_name,
            'address' => $this->address,
            'countryId' => $this->country_id,
            'stateId' => $this->state_id,
            'cityId' => $this->city_id,
            'departmentId' => $this->department_id,
            'zip_code' => $this->zip_code,
            'birthDate' => $this->birth_date,
            'dateHired' => $this->date_hired,
        ];
    }
}
