<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class form_request extends FormRequest
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
            "inputName" => 'required|min 8',
            "inputPrice" => 'required|numeric',
            "inputPromotionPrice" => 'required|numeric',
            "inputUnit" => 'required',
            "inputNew" => 'required',
            "inputType" => 'required',
            "inputDescription" => 'required',
            "inputImage" => 'required|image'
        ];
    }
    public function messages()
    {
        return
            [
            'inputName.required' => "Không được để trống",
            'inputPrice.required' => "Không được để trống",
            'inputPromotionPrice.required' => "Không được để trống",
            'inputUnit.required' => "Không được để trống",
            'inputNew.required' => "Không được để trống",
            'inputType.required' => "Không được để trống",
            'inputImage.required' => "Không được để trống",
            'inputPrice.numeric' =>"Không hợp lệ"
            ];
    }
}
