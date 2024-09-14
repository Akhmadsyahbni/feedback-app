<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(){
        $feedback = Feedback::paginate(10);
        return view('feedback',compact('feedback'));
    }

    // Show individual feedback detail
    public function show($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('feedback-detail', compact('feedback'));
    }
}
