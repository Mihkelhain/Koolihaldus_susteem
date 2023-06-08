<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): view
    {
        if ($request->has('search')) {
            $filtered_tasks = Task::all()->filter(function($task) use ($request){
                return str_contains(strtolower($task->title."|".$task->description."|".$task->worktype.'|'.$task->subject.'|'.$task->status), strtolower($request->input('search')));
            });
            return view('tasks.index', [
                'tasks' => $filtered_tasks,
                'search_string' => $request->input('search'),
            ]);
        }

        return view('tasks.index', [
            'tasks' => Task::all(),
            'search_string' => "",
        ]);
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
    public function store(Request $request): RedirectResponse

    {

        $validated = $request->validate([

            'title' => 'required|string|max:128',
            'description' => 'Nullable|string',
            'dueDate' => 'required|date',
            'worktype' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'status' => 'required|string|max:255',

        ]);


        $task = Task::create($validated);
        $task->save();

        return redirect(route('tasks.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task) : View
    {
        return view("tasks.show",[
            'task' => $task,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task) : View
    {
        return view("tasks.edit",[
            'task' => $task,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task) : RedirectResponse
    {

        $validated = $request->validate([
            'title' => 'required|string|max:128',
            'description' => 'Nullable|string',
            'dueDate' => 'required|date',
            'worktype' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        $task->update($validated);

        return redirect(route('tasks.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task) : RedirectResponse
    {
        Task::destroy($task->id);
        return redirect(route('tasks.index'));
    }

}
