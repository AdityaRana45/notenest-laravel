<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\contributor;

class ContributorController extends Controller
{
    //
        public function index() {
        $contributors = Contributor::all();
        return view('contributors', compact('contributors'));
    }

    public function form() {
        return view('contributor-form');
    }

 public function store(Request $request) {
    $request->validate([
        'name' => 'required',
        'subject' => 'required',
        'note_name' => 'required',
    ]);

    Contributor::create($request->only(['name', 'subject', 'note_name', 'instagram_id']));

    return redirect('/contributorform')->with('success', 'Contributor added successfully!');
}

}
