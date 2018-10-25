<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditTypeProductRequest extends FormRequest
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
            //
            'name'=>'unique:db_typeProducts,name,'.$this->segment(4).',typeProduct_id'
        ];
    }

    public function messages()
    {
        return [
            //
            'name.unique'=>'Tên loại sản phẩm đã bị trùng!'
        ];
    }
}
