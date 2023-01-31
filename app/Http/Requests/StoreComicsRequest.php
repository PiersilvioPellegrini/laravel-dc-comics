<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicsRequest extends FormRequest
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
        return [
            "title"=>"required|min:5|max:255",
            "description"=>"required|text",
            "thumb"=> "string|url",
            "price"=> "required|int|float",
            "series"=> "string",
            "sale_date"=> "required|date|datetime",
            "type"=> "string"
        ];
    }

    public function messages(){
        return [
            "title.required"=>"è richiesto l'inserimento obbligatorio del campo",
            "title.min"=>"minimo caratteri 5",
            "title.max"=>"massimo caratteri consentiti 255",

            "description.required"=>"il campo non può essere lasciato vuoto",

            "price.required"=> "inserire prezzo articolo",
            
            "sale_date.required"=> "inserire la data di vendita",
            "type.required"=> "inserire il tipo",
            
        ];

    }
}
