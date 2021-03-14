<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project ;
use App\Image ;

class ProjectController extends Controller
{
    public function index()
    {

        $model = new Project ;

        $result = $model->get_all_column() ;

        return response()->json([
            'projects' => $result
        ]);
    }

    public function create()
    {
        return '[' . __METHOD__ . '] ' . 'respond a create form';
    }

    public function store(Request $request)
    {
        $model = new Project ;

        $result = $model->create_column($request->title, $request->url, $request->period, $request->image, $request->description) ;

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
        return '[' . __METHOD__ . '] ' . 'delete resource ' . $id;
    }
}
