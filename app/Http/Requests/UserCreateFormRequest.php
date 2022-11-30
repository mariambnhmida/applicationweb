<?php

namespace App\Http\Requests;

use App\Modules\Site\Models\Site;
use Illuminate\Foundation\Http\FormRequest;

class UserCreateFormRequest extends FormRequest
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
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'pays' => 'required',
            'tel' => 'required',
            'site_id' => 'required',
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
            if (!$this->validateSite()) {
                $validator->errors()->add('site_id', 'Invalide site.');
            }
        });
    }

    private function validateSite()
    {
        return !!Site::find($this->site_id);
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'site_id' => 'Site',
        ];
    }

}
