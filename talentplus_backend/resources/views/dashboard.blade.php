
<?php $title = 'Dashboard'; ?>

@section('pageTitle') {{ $title }} |  @endsection

@extends('templates.template')

@section('main_content')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

      <article class="my-3" id="input-group">
        <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
          <h1>Dashboard</h1>
          <hr>
        </div>

        <div>
        <div class="bd-example">
            
          @if( session('info') )
          <!-- Message -->
          <div class="col-sm-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('info') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

        </div>
      </article>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Content</th>
              <th scope="col">Date</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php $rowNumber = 1; ?>
          @foreach($posts as $postRow)
            <tr class="table-light">
              <th scope="row">{{ $rowNumber++ }}</th>
              <td><a href="{{ route('show_post', $postRow->id) }}" class="col-md-4" style="color:black;">{{ $postRow->body }}</a></td>
              <td><a href="{{ route('show_post', $postRow->id) }}" class="col-md-4" style="color:black;">{{ $postRow->created_at }}</a></td>
              <td><a href="{{ route('show_post', $postRow->id) }}" class="form-control btn btn-success col-md-4">View full post</a></td>
            </tr>
          @endforeach
            <tr>
                <a href="{{ route('posts') }}" class="col-md-4 btn btn-primary" style="color:white;">View more posts</a>
            </tr>
          </tbody>
        </table>
      </div>

      <hr>
<?php /*
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Full name</th>
              <th scope="col">Email address</th>
              <th scope="col">Date</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php $rowNumber = 1; ?>
<?php /*          @foreach($users as $userRow)
            <tr class="table-light">
              <th scope="row">{{ $rowNumber++ }}</th>
              <td><a href="{{ route('show_user', $userRow->id) }}" class="col-md-4" style="color:black;">{{ $postRow->name }}</a></td>
              <td><a href="{{ route('show_user', $userRow->id) }}" class="col-md-4" style="color:black;">{{ $postRow->email }}</a></td>
              <td><a href="{{ route('show_user', $userRow->id) }}" class="col-md-4" style="color:black;">{{ $userRow->created_at }}</a></td>
              <td><a href="{{ route('show_user', $userRow->id) }}" class="form-control btn btn-success col-md-4">View User data</a></td>
            </tr>
          @endforeach
            <tr>
                <a href="{{ route('posts') }}" class="col-md-4 btn btn-primary" style="color:white;">View more posts</a>
            </tr>
          </tbody>
        </table>
      </div>
*/ ?>
    </main>

@endsection
<?php /*
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
*/ ?>