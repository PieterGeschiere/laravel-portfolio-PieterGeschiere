<?php

namespace App\Http\Controllers;

use App\Models\Faq;

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

    public function store()
    {
        $faq = new Faq();
        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->save();
        return redirect('/faq');
    }

    public function edit($id)
    {
        $faq = Faq::find($id);

        return view('faq.edit', compact('faq'));
    }

    public function update($id)
    {
        $faq = Faq::find($id);

        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->save();

        return redirect('/faq');
    }

    public function destroy($faq) {
        $faq = Faq::find($faq);
        $faq->delete();

        return redirect('/faq');
    }

    public function show(){

    }
}
