<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
           "link"=>"required",
            "name"=>"required",
            "thumb"=>"required",
        ];
    }
    public function messages()
    {
        return [
            'link.required' => 'Link bị trống',
            'name.required' => 'Bạn phải nhập tên',
            'thumb.required' => 'Bạn phải chọn ảnh',
        ];
    }
}
