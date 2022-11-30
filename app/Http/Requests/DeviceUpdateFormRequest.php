<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DeviceUpdateFormRequest extends DeviceCreateFormRequest
{/**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "id_mac" => [
                "required",
                Rule::unique('devises', 'id_mac')->ignore($this->id)
            ],
            "name_device" => "required",
            "timeout" => "required|numeric|min:1",
            "site_id" => "required|exists:sites,id"
        ];
    }
}
