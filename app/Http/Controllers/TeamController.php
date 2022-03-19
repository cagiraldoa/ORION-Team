<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
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
            'area' => $request->area,
            'cell' => $request->cell,
            'identification' => $request->identification,
            'email' => $request->email
        ]);

        return back()->withSuccess('Integrante creado satisfactoriamente');
    }

    public function list($area)
    {

        if ($area == "Todos") {
            $teams = Team::orderBy('points')->get();

            return view('list', compact('teams'));
        }

        $teams = Team::orderBy('points')->where('area', $area)->get();

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


        return redirect()->route('list.index', 'Todos');
    }


    public function edit(Request $request)
    {
        foreach ($request->input("points") as $key => $value) {
            $team = Team::findOrFail($request->input("idteam")[$key]);
            
            $team->points = $value;
            
            $team->update();
        }

        

            return redirect()->route('list.index', 'Todos');
        
    }
}
