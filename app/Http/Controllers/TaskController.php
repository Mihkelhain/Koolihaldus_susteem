<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : view
    {
        return View("Service.Index");
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

            'Title' => 'required|string|max:255',
            'Description' => 'required|string|max:255',
            'Due Date' => 'required|dateTime|max:255',
            'Worktype' => 'required|string|max:255',
            'Subject' => 'required|string|max:255',
            'Status' => 'required|string|max:255',

        ]);

        $task = Task::create($validated);
        $task->save();

        return redirect(route('Service.Index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
