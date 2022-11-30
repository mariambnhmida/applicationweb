<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Sabberworm\CSS\Rule\Rule;

class SiteUpdateFormRequest extends SiteCreateFormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nom" => [
                "required",
                \Illuminate\Validation\Rule::unique('sites', 'name')->ignore($this->id)
            ],
            "localisation" => "required"
        ];
    }
}
