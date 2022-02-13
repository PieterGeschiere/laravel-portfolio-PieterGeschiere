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
}
