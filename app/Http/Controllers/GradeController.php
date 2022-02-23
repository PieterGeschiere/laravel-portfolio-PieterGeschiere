<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController
{
    public function index()
    {
       return view('grade.index',[
           'grades' => Grade::all()
       ]);
    }

    public function create()
    {
        return view('grade.create');
    }

    public function store(Request $request)
    {
        Grade::create([
            'course_name' => $request->course_name,
            'test_name' => $request->test_name,
            'best_grade' => $request->best_grade,
        ]);

        return redirect()->route('grade.index');
    }

    public function edit(Grade $grade)
    {
        return view('grade.edit', compact('grade'));
    }

    public function update(Grade $grade)
    {
        $grade->question = $request->question;
        $grade->answer = $request->answer;
        $grade->save();

        return redirect()->route('grade.show', $grade->id);
    }

    public function destroy(Grade $grade)
    {
        $grade->delete();
        return redirect()->route('grade.index');
    }

    public function show(Grade $grade){
        return view('grade.show', compact('grade'));
    }
}
