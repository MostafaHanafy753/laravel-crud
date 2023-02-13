<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class createAdminRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_admin'=>'required',
            'salary_admin'=>'required',
            'active_admin'=>'required'

        ];
    }
    public function messages()
    {
        return [
            'name_admin.required'=>"the name of admin is required ",
            'salary_admin.required'=>"the salary of admin is required",
            'active_admin.required'=>"the status of admin is required"
        ];
    } 
}
