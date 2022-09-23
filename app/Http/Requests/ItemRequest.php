<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
        if(request()->routeIs('items.store')){
            $rule = 'required|unique:items';
        }else if(request()->routeIs('items.update')){
            $rule =  ['required',Rule::unique('items')->ignore($this->item->id)];
        }

        return [
            'code' => $rule,
            'description' => 'required',
            'type_id' =>'required'
        ];
    }
}
