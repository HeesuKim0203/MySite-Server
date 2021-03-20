<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
use App\Content;

class ContentController extends Controller
{

    public function index()
    {
        $model = new \App\Content() ;

        $data = $model->get_all_column() ;
        return response()->json([ 'contents' => $data ]) ;
    }

    public function create()
    {
        return 'g2g2' ;
    }

    public function store(Request $request)
    {
        $content_model = new Content ;

        $result = $content_model->create_column(
            $request->image_url,
            $request->title,
            $request->text,
            $request->type
        ) ;

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
        $model = new \App\Content() ;
    	    
        $result = $model->update_text($id, $request->text) ;
    
        return response()->json([ 'result' => $request->text]) ;
    }

    public function destroy($id)
    {
        return '[' . __METHOD__ . '] ' . 'delete resource ' . $id;
    }
}
