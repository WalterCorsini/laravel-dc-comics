<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDcComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:10'],
            'description'=> ['min:20'],
            'thumb'=> ['min:20'],
            'price'=> ['required' ,'min:1','max:1000'],
            'series'=> ['min:10'],
            'sale_date' => ['required', 'date', 'before:'. now()->toDateString()],
            'type'=> ['in:comic book,graphic novel']
        ];
    }

    public function messages() {
        return [
            'title.required' => 'Il campo titolo è vuoto',
            'title.min' => 'Titolo: devi inserire un minimo di 10 caratteri',
            'description.min' => 'Descrizione: devi inserire un minimo di 20 caratteri',
            'thumb.min' => 'Immagine: devi inserire almeno 20 caratteri',
            'price.required' => 'il campo prezzo non puo essere vuoto',
            'price.min' => 'Prezzo : minino 1 euro',
            'price.max' => 'Prezzo : massimo 1000 euro',
            'series.min' => 'Serie: minimo 10 caratteri',
            'sale_date.required' => 'il campo data d\'uscita non puo essere vuoto',
            'sale_date.before' => 'Data: hai inserito una data futura',
            'type.in' => 'Genere: seleziona uno tra quelli indicati',
        ];
    }
}
