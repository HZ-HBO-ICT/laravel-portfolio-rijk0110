<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    /**
     * Shows the faq.blade.php page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {

        $posts = Faq::all();

//        return view('pages/faq');
        return  view('faq', [
            'posts' => $posts
        ]);
    }
    public function create()
    {
        return view('/faq/create');
    }
    public function store()
    {
        $faq = new faq();

        $faq->question = request('question');
        $faq->answer = request('answer');

        $faq->save();
        return redirect('/faq');
    }


}
