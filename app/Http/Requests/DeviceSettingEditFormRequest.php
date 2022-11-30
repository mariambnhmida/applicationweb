<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DeviceSettingEditFormRequest extends FormRequest
{

    public static $thresholds = ['PH', 'ORP', 'water temprature', 'air temprature', 'ppm'];
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
            "name" => [
                "required",
                Rule::in(self::$thresholds)
            ],
            "Up" => "required|numeric|lt:Down",
            "Down" => "required|numeric"
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => 'threshold',
            'Up' => 'minimum value',
            'Down' => 'maximum value'
        ];
    }
}
