<?php

namespace App\Http\Controllers\Task;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $task = Task::all();
        return view('task.index', compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $tasks = validator($request->all(),[
           'title' => ['required','string'],
            'content' => ['nullable','string'],
            'email' => ['required','email', 'max:50'],
            'telefon'=> ['nullable','string'],
           'dr' => ['nullable','date'],
           'img' => ['nullable','file'],
            
               ])->validated();
        //$task = new Task;
        
        Task::firstOrCreate($tasks);
        
       // dd($tasks);
        
        try{
            
            if (isset($tasks['img'])) {
                $tasks['img']=Storage::disk('public')->put('/task',$tasks['img']);
            }
        } catch (Exception $ex) {
            abort(404);
        }
        
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        
        //$task = Task::all();
        
        return view('task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('task.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       dd('записьобновлена');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Task $task)
    {
        try{
            if(($task->img)&&(Storage::disk('public')->exists($task->img))){
                Storage::disk('public')->delete($task->img);
            }
            $task->delete();
        } catch (Exception $ex) {
            abort(404);
        }
        
        return redirect()->route('index');
    }
}
