<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicsRequest extends FormRequest
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
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            "title"=>"required|min:5|max:255",
            "description"=>"required|text",
            "thumb"=> "string|url",
            "price"=> "required",
            "series"=> "string",
            "sale_date"=> "required|date",
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

