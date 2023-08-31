<?php

namespace App\Http\Controllers;

use App\Models\FileCrud;
use Illuminate\Http\Request;

class FileCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FileCrud $fileCrud)
    {
        $images = $fileCrud->paginate(5);
        return view("filecontroll.files", compact("images"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("filecontroll.addFiles");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, FileCrud $fileCrud)
    {
        $request->validate([
            "imgfile" => "required | mimes:jpg,jpeg,png,gif | max:2048"
        ], [
            "imgfile.required" => "No file selected",
            "imgfile.mimes" => "Invalid file formate",
            "imgfile.max" => "The file size is too large",
        ]);
        $fileName = time() . "." . $request->imgfile->extension();
        $request->imgfile->move(public_path("uploads"), $fileName);
        $fileCrud->name = $fileName;
        $fileCrud->save();
        return redirect()->back()->with("success", "Image uploaded successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(FileCrud $fileCrud, $id)
    {
        $fileCrud = $fileCrud->find($id);
        return view("filecontroll.singleImg", compact("fileCrud"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FileCrud $fileCrud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FileCrud $fileCrud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FileCrud $fileCrud)
    {
        //
    }
}
