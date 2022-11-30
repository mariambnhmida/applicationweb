<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeviceCreateFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "id_mac" => "required|unique:devises",
            "name_device" => "required",
            "timeout" => "required|numeric|min:1",
            "site_id" => "required|exists:sites,id"
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (!$this->validateMacAddress()) {
                $validator->errors()->add('id_mac', 'Invalide mac address.');
            }
        });
    }

    public function validateMacAddress()
    {
        return preg_match(
            "/^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/", $this->id_mac
        );
    }
}
