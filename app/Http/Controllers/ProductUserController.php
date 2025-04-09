<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\ProductUser;
use Illuminate\Http\Request;

class ProductUserController extends Controller
{
    public function store(Request $request)
    {
        $messages = [
            'email.unique' => 'Este correo ya está en uso. Por favor, utiliza otro.',
            'firstName.required' => 'El nombre es obligatorio.',
            'lastName.required' => 'El apellido es obligatorio.',
            'email.required' => 'El correo es obligatorio.',
        ];

        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'secondLastName' => 'nullable|string|max:255',
            'email' => 'required|email|unique:product_users,email',
            'description' => 'nullable|string',
        ], $messages);

        $user = ProductUser::create($validated);

        return Inertia::render('productUserTest', [
            'user' => $user,
        ]);
    }
}
