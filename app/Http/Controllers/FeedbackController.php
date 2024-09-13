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
}
