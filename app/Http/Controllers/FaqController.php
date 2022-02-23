<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController
{
    public function index()
    {
       return view('faq.index',[
           'faqs' => Faq::all()
       ]);
    }

    public function create()
    {
        return view('faq.create');
    }

    public function store(Request $request)
    {
        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('faq.index');
    }

    public function edit(Faq $faq)
    {
        return view('faq.edit', compact('faq'));
    }

    public function update(Faq $faq)
    {
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();

        return redirect()->route('faq.show', $faq->id);
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faq.index');
    }

    public function show(Faq $faq){
        return view('faq.show', compact('faq'));
    }
}
