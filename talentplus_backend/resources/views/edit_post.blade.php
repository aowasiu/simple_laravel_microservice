<?php $title = 'Edit post'; ?>

@section('pageTitle') {{ $title }} |  @endsection

@extends('templates.template')

@section('main_content')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

      <article class="my-3" id="input-group">
        <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
          <h1>Edit post</h1>
        </div>

        <div>
        <div class="bd-example">
        <hr/>
        <form action="{{ route('update_post', $post->id) }}" method="post">
          @csrf
          <div class="input-group">
            <span class="input-group-text">Body</span>
            <textarea class="form-control" aria-label="With textarea" name="body">{{ $post->body }}</textarea>
          </div>
          <div class="input-group" style="margin-top: 15px;">
            <a href="{{ route('show_post', $post->id) }}" class="form-control btn btn-success col-md-4">Show post</a>
            <div class="col-md-8"></div>
            <button type="submit" class="form-control btn btn-primary col-md-4">Update</button>
          </div>
        </form>
        </div>
      </article>

    </main>

@endsection