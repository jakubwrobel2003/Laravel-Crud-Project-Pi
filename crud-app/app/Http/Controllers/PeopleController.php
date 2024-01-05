<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
class PeopleController extends Controller
{
    public function index() {

        return view('wrobel.313080.people.index');
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
}
