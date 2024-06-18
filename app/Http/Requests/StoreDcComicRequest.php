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
}
