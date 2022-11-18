<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import this class to be able to run methods from Http class
use Illuminate\Support\Facades\Http;

class ExternalPostApiController extends Controller
{
    /**
     * Testing the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('landing_page');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Set API endpoint
        $api_url = 'http://localhost/talentplus_backend/public/api/list';

        // fetch API endpoint data and hold content in $response variable
        $response = Http::get($api_url);

        return view('list', [
            // Targeting just the contents of the data key
            'responseDisplay' => json_decode($response->body()),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Set API endpoint
        $api_url = 'http://localhost/talentplus_backend/public/api/list/' . $id;

        // Fetch API endpoint data and hold content in $response variable
        $response = Http::get($api_url);

        return view('single', [
            // Targeting just the contents of the data key
            'responseDisplay' => $response
        ]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
