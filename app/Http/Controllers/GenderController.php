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

    public function show($id) {
        $gender = Gender::find($id); // SELECT * FROM genders WHERE gender_id = id;

        return view('gender.show', compact('gender'));
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

    public function edit($id) {
        $gender = Gender::find($id);
        return view('gender.edit', compact('gender'));
    }

    public function update(Request $request, Gender $gender) {
        $validated = $request->validate([
            'gender' => ['required']
        ]);

        $gender->update($validated); // UPDATE genders SET gender = $validated->gender WHERE gender_id = $validated->gender_id;

        return redirect('/genders')->with('message_success', 'Gender successfully updated.');
    }

    public function delete($id) {
        $gender = Gender::find($id);
        return view('gender.delete', compact('gender'));
    }

    public function destroy(Request $request, Gender $gender) {
        $gender->delete($request); // DELETE FROM genders WHERE gender_id = $request->gender_id;
        return redirect('/genders')->with('message_success', 'Gender successfully deleted.');
    }
}
