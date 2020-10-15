<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
        $id = $this->route('user');

        return [
            'username'              =>  "required|string|max:100|unique:users,username,{$id},id,deleted_at,NULL",
            'avatar'                =>  'nullable|string',
            'email'                 =>  "nullable|email|unique:users,email,{$id},id,deleted_at,NULL",
            'password'              =>  [
                is_null($id)? 'required' : 'nullable',
                'string',
                'min:6',
            ],
            'name'                  =>  'required|string',
            'roles'                 =>  'required|array',
            'roles.*'               =>  'required|exists:roles,id',
            'phone'                 =>  'nullable|string|max:14',
        ];
    }
}
