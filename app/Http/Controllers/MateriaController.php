<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index($id)
    {
        $teacher = Teacher::findOrFail($id);

        return view('materias.manage', compact('teacher'));
    }

    public function store(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

        $teacher->subjects()->create([
            'subject'       => $request->subject,
            'day'           => $request->day,
            'start_time'    => $request->start_time,
            'end_time'      => $request->end_time,
            'course'        => $request->course,
            'division'      => $request->division
        ]);

        return back();
    }

    public function delete ($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();

        return back();
    }
}
