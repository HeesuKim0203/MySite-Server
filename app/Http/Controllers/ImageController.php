<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage ;
use App\Image ;

class ImageController extends Controller
{
    public function index()
    {   
        $model = new Image ;

        $data = $model->get_all_column() ;

        return response()->json([
            'images' => $data
        ]); ;  
    }

    public function create()
    {
        return '[' . __METHOD__ . '] ' . 'respond a create form' ; 
    }

    public function store(Request $request)
    {    
        $model = new Image ;

        $fileName = $request->file('file')->store('images', 'public') ;

        $result = $model->create_column($fileName) ;
	
        return $result ;
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
        $model = new Image() ;

	$result = $model->delete_column($id) ;
	
	if(!$result) return response()->json([ 'result' => false ]) ;

	Storage::disk('local')->delete("public/images/{$result}") ;

        return response()->json([ 'result' => true ]) ;
    }
}
