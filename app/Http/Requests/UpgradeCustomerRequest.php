<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpgradeCustomerRequest extends FormRequest
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
            'name' => 'required|min:3|regex:/^([a-zA-Z0-9 ])+$/u',
            'age' => 'required|max:3|regex:/^([0-9])+$/u',
            'email' => "required|email|unique:customers,email,$this->id,id",
            'address' => 'required',
            'avatar' => 'nullable|mimes:jpeg,jpg,png,bmp'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Ten khong duoc de trong',
            'name.min' => 'Ten it nhat 3 ky tu',
            'name.regex' => 'Ten phai dung dinh dang',
            'age.required' => 'Tuoi khong duoc de trong',
            'age.max' => 'Tuoi khong duoc lon hon 999',
            'age.regex' => 'Tuoi phai dung dinh dang',
            'email.required' => 'Email khong duoc de trong',
            'email.email' => 'Email phai dung dinh dang',
            'email.unique' => 'Email da duoc su dung',
            'address.required' => 'Dia chi khong duoc de trong',
            'Avatar.mimes' => 'Anh can dung dinh dang'
        ];
    }
}
