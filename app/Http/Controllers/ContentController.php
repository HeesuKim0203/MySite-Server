<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;

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
        $content_model = new \App\Content() ;
        $language_model = new \App\Language() ;
        $text_model = new \App\Text() ;
        $image_model = new \App\Image() ;

        $language_id = $language_model->search_column($request->input('language')) ;

        $content_model->create_column($request->input('title'), $language_id[0]->id) ;
        $text_model->create_column($request->input('css'), $request->input('html'), $content_model->max_id()) ;
        $result = $image_model->create_column($request->input('url'), $content_model->max_id()) ;

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
        
        

        return '[' . __METHOD__ . '] ' . 'validate the form data from the edit form and update the resource having id of ' . $id;
    }

    public function destroy($id)
    {
        return '[' . __METHOD__ . '] ' . 'delete resource ' . $id;
    }
}
