<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage ;

class ImageController extends Controller
{
    public function index()
    {
        return '[' . __METHOD__ . '] ' . 'respond the index page' ;  
    }

    public function create()
    {
        return '[' . __METHOD__ . '] ' . 'respond a create form' ; 
    }

    public function store(Request $request)
    {
        $url = $request->file('file')->store('images', 'public') ;

        return "http://54.145.229.76:80/storage/{$url}" ;
    }

    public function show($id)
    {
        return '[' . __METHOD__ . '] ' . 'respond an instance having id of ' . $id;
    }

    public function edit($id)
    {
        return '[' . __METHOD__ . '] ' . 'respond an edit form for id of ' . $id;
    }

    public function update(Request $request, $id)
    {
        return '[' . __METHOD__ . '] ' . 'validate the form data from the edit form and update the resource having id of ' . $id;
    }

    public function destroy($id)
    {
        return '[' . __METHOD__ . '] ' . 'delete resource ' . $id;
    }
}
