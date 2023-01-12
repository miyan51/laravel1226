<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inquiry;


class InquiryController extends Controller
{
    function index()
    {
        return view('index');
    }
    function add(Request $request)
    {

        $inquiry = new Inquiry();
        $inquiry->name = $request->name;
        $inquiry->text = $request->text;
        $inquiry->save();
        return redirect('/');
    }
    function search(Request $request)
    {
        $results = Inquiry::all();

        Inquiry::query();
        $search = $request->search;
        $query = Inquiry::query();
        if (!empty($search)) {
            $query->where('name', 'LIKE', "%{$search}%");
            $results = $query->get();
        }

        return view('/search', compact('results'));
    }
}
