<?php

namespace App\Http\Requests;

use App\Product;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('product_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'required',
            ],
            'headtitle' => [
                'required',
            ],
            'category' => [
                'required',
            ],
            'sub_title' => [
                'required',
            ],
            'slug' => [
                'required',
            ],
             'month' => [
                'required',
            ],

            'day' => [
                'required',
            ],
            'description' => [
                'required',
            ],
            'body' => [
                'required',
            ],
            'image' => [
                'required',
            ],
        ];
    }
}
