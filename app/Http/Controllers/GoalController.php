<?php

namespace App\Http\Controllers;

use App\Models\goal;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request("search")){
            $data = goal::where("title","like","%".request("search")."%")->orWhere("description", "like", "%".request("search")."%")->get();
            return view("page.goals", compact("data"));
        }else{
            $data = goal::all();
            return view("page.goals", compact("data"));
        }
    }

    public function find(string $status)
    {
        $data = goal::where('status', $status)->get();
        return view('page.goals', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datainput = $request->all();
        goal::create($datainput);

        return back()->with("created", "1");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $goal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(goal $goal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $datainput = $request->validate(
            [
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'status' => 'required',
            ]
        );
        goal::where('id', $id)->update([
            'title' => $datainput['title'],
            'description' => $datainput['description'],
            'status' => $datainput['status'],
        ]   );
        return back()->with("updated", "1");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        goal::find($id)->delete();
        return back()->with("deleted", "1");
    }
}
