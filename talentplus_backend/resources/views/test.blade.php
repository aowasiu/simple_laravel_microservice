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
          <div class="input-group">
            <span class="input-group-text">Body</span>
            <textarea class="form-control" aria-label="With textarea">Talent Plus post (512) </textarea>
          </div>
          <div class="input-group" style="margin-top: 15px;">
            <button type="button" class="form-control btn btn-success col-md-4">Show post</button>
            <div class="col-md-8"></div>
            <button type="button" class="form-control btn btn-primary col-md-4">Update</button>
          </div>
        </div>
      </article>

    </main>

@endsection