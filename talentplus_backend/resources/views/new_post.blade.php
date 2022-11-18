<?php $title = 'New post'; ?>

@section('pageTitle') {{ $title }} |  @endsection

@extends('templates.template')

@section('main_content')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

      <article class="my-3" id="input-group">
        <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
          <h1>New post</h1>
        </div>

        <div class="bd-example">
        <hr/>
            
          @if( session('info') )
          <!-- Message -->
          <div class="col-sm-12">
              <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Alert!</span> {{ session('info') }} {{ session('info') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
          </div>
          @endif

          @if( count($errors) > 0 )
          <!-- Errors message -->
          <div class="col-sm-12">
              <ul class="alert alert-danger list list-unstyled text-center">
              @foreach( $errors->all() as $error )                     
                  <li>{{ $error }}</li>
              @endforeach
              </ul>
              <hr>
          </div>
          @endif

        <form action="{{ route('new_posting') }}" method="post">
          @csrf
          <div class="input-group">
            <span class="input-group-text">Body</span>
            <textarea name="body" class="form-control" aria-label="With textarea">{{ old('body') }}</textarea>
          </div>
          <div class="input-group" style="margin-top: 15px;">
            <button type="button" class="form-control btn btn-primary col-md-4">Clear field</button>
            <div class="col-md-4"></div>
            <button type="submit" class="form-control btn btn-primary col-md-4">Post</button>
          </div>
        </form>
        </div>
      </article>

    </main>

{{ session()->forget('info') }}
@endsection