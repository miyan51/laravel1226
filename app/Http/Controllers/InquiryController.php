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
    function thanks(Request $request)
    {
        $inquiries = new inquiry();
        $inquiries->name = $request->name;
        $inquiries->email = $request->email;
        $inquiries->save();
        return view('thanks');
    }
}
