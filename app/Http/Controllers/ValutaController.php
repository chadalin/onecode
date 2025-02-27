<?php

namespace App\Http\Controllers;

use App\Models\Valuta;
use Illuminate\Http\Request;

class ValutaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('valuta.index');
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
            
          'name' => ['required', 'string','max:50'],
           'email' => ['required', 'string', 'max:50', 'email'],
            'password' => ['required', 'string', 'min:3'],
            'remember' => ['accepted'],
             ]);
           
             dd($validated);
        
           $valuta = new Valuta; 
            
          
           $valuta->name = $validated['name'];
           $valuta->emeil = $validated['emeil'];
           $valuta->password = $validated['password'];
           
           $valuta->save();
           
   dd($valuta);
          // $valuta->name = $validated['name'];
          //  ]);
         //   dd($validated);
       // return ($request);
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
