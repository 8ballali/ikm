<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Response;
use Illuminate\Http\Request;

class ResponseController extends Controller
{

    public function store(Request $request)
    {
        Response::create([
            'answer_id' => $request->answer_id
        ]);
        echo "<script>setTimeout(function(){ window.location.href = 'https://ikm.idaman.org/penilaian/response'; }, 30000);</script>";
        return view('user.index');
    }
}
