<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FaqController
{
    public function show()
    {
       return view('faq',[
           'faqs' => Faq::all()
       ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $faq = new Faq();
        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->save();
        return redirect('/faq');

    }
}
