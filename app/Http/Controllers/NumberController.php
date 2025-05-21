<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function index()
    {
        return view('number');
    }

    public function check(Request $request)
    {
        $request->validate([
            'number' => 'required|integer|min:1'
        ]);

        $maxNumber = (int) $request->input('number');

        $numbers = range(1, $maxNumber);

        $odds = array_filter($numbers, fn($n) => $n % 2 !== 0);

        $evens = array_filter($numbers, fn($n) => $n % 2 === 0);

        return view('number', compact('maxNumber', 'odds', 'evens'));
    }
}
