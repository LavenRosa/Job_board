<?php

namespace App\Http\Controllers;

use App\Models\Jobpost; 
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        $search = $request->input('search');
        $results = Jobpost::search($search);

        return view('frontend.search', compact('results'));
    }
}
