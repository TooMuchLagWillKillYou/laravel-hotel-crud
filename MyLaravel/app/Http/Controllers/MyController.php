<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class MyController extends Controller
{
    public function home(){

        $employees = Employee::all();

        return view('pages.home', compact('employees'));
    }

    public function edit($id){

        $employee = Employee::findOrFail($id);

        return view('pages.edit', compact('employee'));
    }

    public function update(Request $request, $id){
        
        $validated = $request -> validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'role' => 'required|string',
            'ral' => 'required|integer',
        ]);

        $employees = Employee::findOrFail($id);
        $employees -> update($validated);

        return redirect() -> route('home');
    }

    public function destroy($id){

        $employee = Employee::findOrFail($id);

        $employee -> delete();
        
        return redirect() -> route('home');
    }
}
