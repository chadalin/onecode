<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\AdminStudent;
use App\Models\Task;

class AdminStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
    $students = AdminStudent::all();
        return view('admin.students.index',compact('students'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        
        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd('store');
    }

    /**
     * Display the specified resource.
     */
    public function show(AdminStudent $adminStudent)
    {
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminStudent $adminStudent)
    {
        dd('edit');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminStudent $adminStudent)
    {
        dd('update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminStudent $adminStudent)
    {
        dd('destrou');
    }
             public function test(){

    // Используем Faker для генерации реалистичных данных
    //$faker = \Faker\Factory::create();
           
    // Количество студентов, которых нужно создать
    $numberOfStudents = 100;

    for ($i = 0; $i < $numberOfStudents; $i++) {
        AdminStudent::query()->create([
            'id' => fake()->unique()->numberBetween(1000, 9999), // Уникальный ID
            'img' => fake()->imageUrl(200, 200, 'people'), // Ссылка на случайное изображение
            'email' => fake()->unique()->safeEmail, // Уникальный email
            'name' => fake()->name, // Случайное имя
            'activ' => fake()->boolean(80), // 80% chance of being active
            'created_at' => fake()->dateTimeBetween(now()->subYear(), now()), // Дата создания
        ]);
    }

    echo 'Создано ' . $numberOfStudents . ' фейковых студентов.';
}
}
