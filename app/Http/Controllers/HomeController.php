<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pendingTasksCount = Task::where('status', 'pendiente')->count();
        $completedTasksCount = Task::where('status', 'completado')->count();
        return view('home', [
            'pendingTasksCount' => $pendingTasksCount,
            'completedTasksCount' => $completedTasksCount,
        ]);
    }
}
