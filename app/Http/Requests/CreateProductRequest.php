<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CreateProductRequest extends FormRequest
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
            'name'=>'required|min:3',
            'price'=>'required|numeric'
        ];
    }
    public function messages(){
        return[
            'name.required'=>'mày nhập name vào',
            'price.required'=>'mày nhập price vào',
            'name.min'=>'mày nhập ngắn quá rồi đấy',
            'name.numberic'=>'nhập số vào',
        ];
    }
}
