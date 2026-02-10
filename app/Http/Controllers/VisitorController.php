<?php

namespace App\Http\Controllers;

use App\Http\Services\VisitorService;
use App\Models\Visitor;
use Illuminate\Http\Request;


class VisitorController extends Controller
{

    private VisitorService $visitorService = app("VisitorService");

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->visitorService->getAll();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $visitor = new Visitor();
        $visitor->title = $request->input("title");
        $visitor->name = $request->input("name");
        $visitor->surname = $request->input("surname");
        $visitor->zip_code = $request->input("zip_code");
        $visitor->city = $request->input("city");
        $visitor->phone_number = $request->input("phone_number");
        $visitor->source = $request->input("source");
        $visitor->notification = $request->input("notification", false);
        $this->visitorService->save($visitor);
    }

    /**
     * Display the specified resource.
     */
    public function show(Visitor $visitor)
    {
        return $visitor;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visitor $visitor)
    {
        $visitor->title = $request->input("title", $visitor->title);
        $visitor->name = $request->input("name", $visitor->name);
        $visitor->surname = $request->input("surname", $visitor->surname);
        $visitor->zip_code = $request->input("zip_code", $visitor->zip_code);
        $visitor->city = $request->input("city", $visitor->city);
        $visitor->phone_number = $request->input("city", $visitor->phone_number);
        $visitor->source = $request->input("source", $visitor->source);
        $visitor->notification = $request->input("notification", $visitor->notification);
        $this->visitorService->save($visitor);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visitor $visitor)
    {
        $this->visitorService->delete($visitor);
    }
}
