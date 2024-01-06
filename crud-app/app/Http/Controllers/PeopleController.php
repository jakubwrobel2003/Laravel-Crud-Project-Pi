<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
class PeopleController extends Controller
{
    public function index() {
        $people =people::all();
        return view('wrobel.313080.people.index',['people'=>$people]);
        
    }

    public function create() {

        return view('wrobel.313080.people.create');
    }
    public function add(Request $request) {
       $data=$request->validate([
        'name'=>'required',
        'lastname'=>'required',
        'nr_phone'=>'required|numeric',
        'street'=>'required',
        'country'=>'required',


       ]);
       $newPeople=People::create($data);
       return redirect(route('people.index'));
    }

    public function edit(people $people) {

        return view('wrobel.313080.people.edit',['people'=>$people]);
    }
    public function u(People $people, Request $request) {
        $data=$request->validate([
            'name'=>'required',
            'lastname'=>'required',
            'nr_phone'=>'required|numeric',
            'street'=>'required',
            'country'=>'required',
    
    
           ]);
           $people->update($data);
           return redirect(route('people.index'));
    }
    public function delete(People $people) {
        // Logika usuwania rekordu
        $people->delete();
    
        return redirect()->route('people.index')->with('success', 'Person deleted');
    }

    public function showById(Request $request)
    {
        $id = $request->input('id');
        $person = People::find($id);

        return view('wrobel.313080.people.show', ['person' => $person]);
    }
}
