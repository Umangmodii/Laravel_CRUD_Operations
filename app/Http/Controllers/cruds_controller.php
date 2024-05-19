<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\Crud;

class cruds_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cruds = Crud::all();

        return view('show',compact('cruds'));
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
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'gender'=>'required',
            'qualification'=>'required'
        ]);

        try
        {

        $crud = new Crud;
        $crud->fname = $request->get('fname');
        $crud->lname = $request->get('lname');
        $crud->gender = $request->get('gender');
        $crud->qualification = $request->get('qualification');
        $crud->save();

        return redirect()->back()->with('success', 'Data Inserted Successfully!');

        }

        catch(Exception $e)
        {
            return redirect()->back()->with('error', 'An error occurred while saving the data.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $crud = Crud::find($id);
        
        return view('edit',compact('crud'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'fname' => 'required',
        'lname' => 'required',
        'gender' => 'required',
        'qualification' => 'required',
    ]);

    $crud = Crud::find($id);
    $crud->fname = $request->get('fname');
    $crud->lname = $request->get('lname');
    $crud->gender = $request->get('gender');
    $crud->qualification = $request->get('qualification');
    $crud->save();

    return redirect()->route('edit', $crud->id)->with('success', 'Data Updated Successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crud  = Crud::find($id);
        $crud->delete();
    }
}
