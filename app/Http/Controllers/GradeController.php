<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use DateInterval;



class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return View("grades.index",[
            'grades'=>Grade::all(),
            'tasks'=>task::all(),
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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'gradeSubject' => 'required|string|max:128',
            'grade' => 'required|int|max:5',
            'task_id' => 'required|gt:0',

        ]);
        $grade = new Grade;
        $grade->gradeSubject= $validated['gradeSubject'];
        $grade->grade = $validated['grade'];
        $grade->task()->associate(Task::find($validated['task_id']));
        $grade->user()->associate($request->user());
        $grade->save();

        return redirect(route('grades.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grade $grade) : View
    {
        $dueDate = date_create($Task->dueDate);
        $seconds = $dueDate->format('s');
        if($seconds > 0){
            $dueDate->sub(new DateInterval("PT".$seconds."S"));
            $grade->dueDate = $dueDate->format('c');
        }
        return view('grades.edit',[
            'grade'=>$grade,
            'tasks'=>Task::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grade $grade)
    {

        $validated = $request->validate([
            'gradeSubject' => 'required|string|max:128',
            'grade' => 'required|int|max:5',
            'task_id' => 'required|gt:0',
        ]);
        $grade->update($validated);

        return redirect(route('grades.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grade $grade)
    {
        //
    }
}
