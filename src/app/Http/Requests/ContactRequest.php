<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|max:25',
            'email' => 'required|email|max:25',
            'tel' => 'required|digits:11',
            'message' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必須です。',
            'name.max' => '名前は25文字以内で入力してください。',
            'email.required' => 'メールアドレスは必須です。',
            'email.email' => '有効なメールアドレスを入力してください。',
            'email.max' => 'メールアドレスは255文字以内で入力してください。',
            'tel.required' => '電話番号は必須です。',
            'tel.digits' => '電話番号は11桁の数字で入力してください。',
            'message.required' => 'お問い合わせ内容は必須です。'
        ];
    }
}
