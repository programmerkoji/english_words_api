<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreWord extends FormRequest
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
        $route= $this->route()->getName(); //現在のroute名を取得

        $rules = [
            'word_ja' => 'required|string|max:255',
            'part_of_speech' => 'required',
            'memory' => 'required',
            'memo' => 'string|nullable',
        ];

        switch ($route) {
            case 'words.store':
                // $rules['word_en'] = 'required|unique:words,word_en|string|max:255';
                $rules['word_en'] =['required', Rule::unique('words')->where('user_id', Auth::id()), 'string', 'max:255'];
                break;

            case 'words.update':
                $rules['word_en'] = 'required|string|max:255';
                break;
        }
        return $rules;
    }
}
