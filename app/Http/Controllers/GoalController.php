<?php

namespace App\Http\Controllers;

use App\Models\goal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request("search")){
            $data = goal::where("target_value","like","%".request("search")."%")->orWhere("title", "like", "%".request("search")."%")->where("status", "!=","completed")->get();
            return view("page.goals", compact("data"));
        }else{
            $data = goal::where("status", "!=","completed")->get();
            return view("page.goals", compact("data"));
        }
    }

    public function find(string $status)
    {
        if($status == "completed"){
            $data = goal::where("status", "completed")->get();
            return view('page.goals', compact('data'));
        }else{
            $data = goal::where('timeline', $status)->where("status", "!=","completed")->get();
            return view('page.goals', compact('data'));
        }
        
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
            'title' => $request->title,
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

    
        // Ambil data berdasarkan ID
        $data = goal::find($id);
    
        // Update data
        $data->title = $request['title'];
        $data->target_value = $request['target_value'];
        $data->current_value = $request['current_value'];
        $data->current_persen = $request['current_persen'];
        $data->timeline = $request['timeline'];
        $data->status = $request['status'];
    
        // Cek jika ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($data->image && Storage::disk('public')->exists($data->image)) {
                Storage::disk('public')->delete($data->image);
            }
    
            // Simpan gambar baru
            $data->image = $request->file('image')->store('uploads', 'public');
        }
    
        // Simpan perubahan
        $data->save();
        return back()->with("updated", 1);

    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        goal::find($id)->delete();

        return back()->with("deleted", 1);

    }
}
