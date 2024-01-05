<?php

namespace App\Http\Controllers;
use Faker\Factory as Faker;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function generateFakeData()
    {
        $faker = Faker::create();

        $fakeData = [
            'name' => $faker->name,
            'email' => $faker->email,
            'phone' => $faker->phoneNumber,
        ];

        return view('example.view', compact('fakeData'));
    }
}
