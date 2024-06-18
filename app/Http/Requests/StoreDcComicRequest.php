<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDcComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:10'],
            'description'=> ['min:20'],
            'price'=> ['required' ,'min:1','max:1000'],
            'sale_date' => ['required', 'date', 'before:'. now()->toDateString()],
            'type'=> ['required','in:comic book,graphic novel']
        ];
    }

    public function messages() {
        return [
            'title.required' => 'Il campo titolo è vuoto',
            'title.min' => 'devi inserire un minimo di 10 caratteri',
            'description.required' => 'devi inserire un minimo di 20 caratteri',
            'price.required' => 'il campo prezzo non puo essere vuoto',
            'price.min' => 'il campo prezzo non puo essere inferiore ad 1 euro',
            'price.max' => 'il campo prezzo non puo essere inferiore ad 1000 euro',
            'sale_date.required' => 'il campo data d\'uscita non puo essere vuoto',
            'sale_date.before' => 'il campo data d\'uscita non puo essere una data futura',
            'type.required' => 'il campo genere non puo essere vuoto',
            'type.in' => 'il campo genere non è tra quelli indicati',
        ];
    }
}
