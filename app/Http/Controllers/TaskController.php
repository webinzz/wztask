<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request("search")){
            $data = task::where("title","like","%".request("search")."%")->orWhere("description", "like", "%".request("search")."%")->where("status", "!=", "finish")->get();
            return view("page.todo", compact("data"));
        }else{
            $data = task::where("status", "!=", "finish")->get();
            return view("page.todo", compact("data"));
        }
    }

    public function find(string $status)
    {
        $data = Task::where('status', $status)->get();
        return view('page.todo', compact('data'));
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
        task::create($datainput);

        return back()->with("created", "1");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
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
        task::where('id', $id)->update([
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
        task::find($id)->delete();
        return back()->with("deleted", "1");
    }
}
