<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    /*
    index
    show
    create
    store
    edit
    update
    delete
    destroy
    */

    public function index() {
        $genders = Gender::all();
        return view('gender.index', compact('genders'));
    }

    public function show() {

    }

    public function create() {
        return view('gender.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'gender' => ['required']
        ]);

        Gender::create($validated);
        
        return redirect('/genders')->with('message_success', 'Gender successfully saved.');
    }

    public function edit() {

    }

    public function update() {

    }

    public function delete() {

    }

    public function destory() {

    }

}
