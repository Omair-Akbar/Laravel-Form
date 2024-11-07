<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showData(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'age' => 'required|integer|min:1',
            'skills' => 'required|array',
            'skills.*' => 'in:php,python,java,javascript', // ensure each skill is valid
        ]);

        // If validation passes, return the validated data or save it to the database
        return response()->json($validatedData);
    }
}
