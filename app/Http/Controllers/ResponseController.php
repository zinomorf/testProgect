<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Response;


class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Responses = Response::orderBy('id', 'desc')->get();
        return view('response', ['editResp' => '', 'responses' => $Responses] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        if (Input::has('name')) {
               $resp = new Response;
               $resp->name = Input::get('name');
               $resp->email = Input::get('email');
               $resp->text = Input::get('text');
               $resp->save();
        }
        $Responses = Response::orderBy('id', 'desc')->get();
        return view('response', ['editResp' => '', 'responses' => $Responses] );       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Response = Response::find($id);
        $Responses = Response::orderBy('id', 'desc')->get();
        //print_r($Response->text);exit;
        return view('response', ['editResp' => $Response, 'responses' => $Responses] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resp = Response::find($id);
        
        if (Input::has('name')) {
              // $resp = new Response;
               $resp->name = Input::get('name');
               $resp->email = Input::get('email');
               $resp->text = Input::get('text');
               $resp->save();
        }
        return redirect('/response');
        

         /*return View::make('response')
            ->with('response', $Responses);*/
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Response::find($id)->delete();
        return redirect('/response');
        
        
    }
}
