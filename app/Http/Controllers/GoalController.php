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
    
        // Upload gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
        }

        Goal::create([
            'target_value' => $request->target_value,
            'current_value' => $request->current_value,
            'current_persen' => $request->current_persen,
            'timeline' => $request->timeline,
            'image' => $imagePath ?? 'default.png', // gunakan path gambar atau default
        ]);

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

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {

    }
}
