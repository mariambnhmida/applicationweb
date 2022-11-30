<?php

namespace App\Http\Requests;

use App\Modules\Site\Models\Site;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateFormRequest extends UserCreateFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($this->id)
            ],
            'password' => 'confirmed',
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'pays' => 'required',
            'tel' => 'required',
            'site_id' => 'required',
        ];
    }

}
