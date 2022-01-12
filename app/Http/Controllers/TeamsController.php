<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index()
    {


        return view('create');
    }


    public function add(Request $request)
    {


        Team::create([

            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'description' => $request->description
        ]);

        return back()->withSuccess('Elemento creado satisfactoriamente');
    }

    public function list()
    {

        $teams = Team::all();

        return view('list', compact('teams'));
    }

    public function show($id)

    {

        $team = Team::findOrFail($id);


        return view('individual', compact('team'));
    }


    public function delete($id)

    {

        Team::destroy($id);


        return redirect()->route('list.index');
    }
}
