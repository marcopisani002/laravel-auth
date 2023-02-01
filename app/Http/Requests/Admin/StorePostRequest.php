<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePostRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        // Controllo se l'utente è admin.
        // se no blocco.
        if (Auth::user()->role !== "admin") {
            return false; // blocca l'azione e da un errore di autorizzazione
        }

        return true; // Consente l'azione
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() {
        return [
            "title" => "required|min:10|max:255",
            "content" => "required|string",
            "public" => "boolean",
            "cover_img" => "string|url"
        ];
    }
}
