<?php

namespace App\Http\Controllers;

use App\postController;
use Illuminate\Http\Request;

class PostControllerController extends Controller
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
    public function create() // Create laat een view zien met een forum
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //Post request
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\postController  $postController
     * @return \Illuminate\Http\Response
     */
    public function show(postController $postController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\postController  $postController
     * @return \Illuminate\Http\Response
     */
    public function edit(postController $postController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\postController  $postController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, postController $postController) //patch request
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\postController  $postController
     * @return \Illuminate\Http\Response
     */
    public function destroy(postController $postController) 
    {
        //
    }
}
