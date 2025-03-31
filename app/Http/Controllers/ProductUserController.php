<?php

namespace App\Http\Controllers;

use App\Models\ProductUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        //Creamos un bloque para las validaciones:
        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'secondLastName' => 'nullable|string|max:255',
            'email' => 'required|email|unique:product_users,email',
            'description' => 'nullable|string',
        ]);

        //Lo enviamos al modelo
        $user = ProductUser::create($validated);

        return response()->json($user, 201);
    }
}
