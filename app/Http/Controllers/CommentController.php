<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment ;
use Illuminate\Support\Arr ;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment_model = new Comment ;

        $result = $comment_model->create_tuple(
            $request->user_name,
            $request->text,
            $request->password,
            $request->content_id
        ) ;

        return response()->json(['result' => $result ? Arr::except($result, [ 'password' ]) : false])  ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment_model = new Comment ;
        
        $result = $comment_model->id_select_tuple($id) ;

        return $result ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comment_model = new Comment ;

        $result = $comment_model->update_tuple($id, $request->text) ;

        return response()->json(['result' => $result ? true : false]) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment_model = new Comment ;

        $result = $comment_model->delete_tuple($id) ;

        return response()->json(['result' => $result ? true : false]) ;
    }

    public function checkUser(Request $request) 
    {
        $comment_model = new Comment ;

        $result = $comment_model->check_tuple(
            $request->user_name,
            $request->password,
            $request->comment_id
        ); 

        return response()->json(['result' => $result]) ;
    }
}
