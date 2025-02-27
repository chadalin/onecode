<?php

namespace App\Http\Controllers\Validation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ValidationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            
            
           'first_name' => ['requires', 'string', 'max:50'],
            'last_name' => ['nullable', 'srting', 'max:50'],
            'age' => ['nulluble', 'integer', 'min:18','max:50'],
            'amout' =>['nullable', 'numeric','min:1','max:999999'],
            'gender' => ['nullable', 'string','in:male,female'],
            'zip' => ['required','digist:6'],
            'agreenent' => ['accepted'],
            'password' => ['required','string','min:7', 'confirmed'],
            'email' => ['required','string','email','exist:users,email'],
            
            
            
            
            
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
