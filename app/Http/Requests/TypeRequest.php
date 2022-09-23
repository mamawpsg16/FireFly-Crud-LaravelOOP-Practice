<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class TypeRequest extends FormRequest
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
        if(request()->routeIs('types.store')){
            $rule = 'required|unique:types';
        }else if(request()->routeIs('types.update')){
            $rule =  ['required',Rule::unique('types')->ignore($this->type->id)];
        }

        return [
            'code' =>  $rule,
            'description' => 'required'
        ];
    }
}
