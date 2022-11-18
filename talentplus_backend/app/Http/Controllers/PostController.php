<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import database models
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        // Get the list of posts
        $users = User::all()->orderBy('created_at', 'asc')->paginate(15);

        return view('posts', [
            'users' => $users
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function posts()
    {
        // Get the list of posts
        $posts = Post::paginate(15);

        return view('posts', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $fields = $request->validate([
            'body' => 'required|string',
        ]);

        // Create new post in the database
        //Instanstiate post input class model
        $new_input               = new Post;
 
        // Sanitize inputs
        $new_input->body       = filter_var($request->input('body'), FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_ENCODE_HIGH);
        $new_input->created_at       = now();
        $new_input->updated_at       = now();
        $new_input->save();

        session()->flash('info', 'Good Job! Your new post has been created, successfully.');
        
        //Redirect to a route's name
        return redirect()->route('show_post', [ $new_input->id ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get the full data for the post with given ID
        $postData = Post::findOrFail($id);

        // Display view page
        return view('show_post', [
            'postData' => $postData,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Get the full data for the post with given ID
        $post = Post::findOrFail($id);

        // Display edit page
        return view('edit_post', [
            'post' => $post,
        ]);
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
        // In case the post doesn't exist, redirect the user to the dashboard.
        if($id == 0)
        {
            // Set a message to flash at the User
            session()->flash('info', 'This post does not exist');

            // Redirect the User to the Login page
            return redirect()->route('dashboard');
        }

        // Process variables for updating
        $updateData = array(
            //Sanitize inputs where necessary before saving to database
            /**** Leave the following values as they are *****/

            ////////////////////////////////////////
            /// Clean up variables for database ///
            //////////////////////////////////////
            'body' => filter_var($request->input('body'), FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_ENCODE_HIGH),
            'updated_at' => now()
        );

        Post::where('id', $id)
            ->update($updateData);

        session()->flash('info', 'Good Job! The post has been updated, successfully.');
        
        //Redirect to a route's name
        return redirect()->route('show_post', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    
        // Set form inputs as variable.
        $postID     = $id;

        // Check that such post exists
        if($postID == '')
        {
            // Flash this message. Note, it'll appear once only.
            session()->flash('info', 'No such post exists.');

            //Redirect to previous URL
            return redirect()->route('dashboard');
        }

        // Delete the post from database based on given id
        Post::destroy($id);

        // Create flash message
        session()->flash('info', 'The post has been deleted, successfully.');

        //Redirect to a route's name
        return redirect()->route('dashboard');
    }
}
