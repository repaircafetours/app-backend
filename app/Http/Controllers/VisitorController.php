<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;


class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return Visitor::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Visitor $visitor)
    {
        //
        return $visitor;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visitor $visitor)
    {
        //
        $visitor->title = $request->input("title", $visitor->title);
        $visitor->name = $request->input("name", $visitor->name);
        $visitor->surname = $request->input("surname", $visitor->surname);
        $visitor->zip_code = $request->input("zip_code", $visitor->zip_code);
        $visitor->city = $request->input("city", $visitor->city);
        $visitor->phone_number = $request->input("city", $visitor->phone_number);
        $visitor->source = $request->input("source", $visitor->source);
        $visitor->notification = $request->input("notification", $visitor->notification);
        $visitor->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visitor $visitor)
    {
        $visitor->delete();
    }
}
