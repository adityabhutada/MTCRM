<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Return a simple welcome message.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(['message' => 'Welcome']);
    }
}
