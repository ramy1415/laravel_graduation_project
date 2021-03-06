<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreDesignsRequest extends FormRequest
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
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category' => 'required',
            'sourceFile'  => 'required|mimes:pdf|max:10000',
            'images' => 'required',
            'images.*' => 'image|mimes:jpg,jpeg,png',
            'tag_id' => 'required',
            'Material' => 'required'
            //
        ];
    }
}
