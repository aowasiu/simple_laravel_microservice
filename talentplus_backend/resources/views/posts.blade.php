<?php $title = 'All posts'; ?>

@section('pageTitle') {{ $title }} |  @endsection

@extends('templates.template')

@section('main_content')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
      </div>

      <h2>{{ $title }}</h2>
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
            <tr class="table-light">
              {{ $posts->links() }}
            </tr>
          </tbody>
        </table>
        {{ $posts->links() }}
      </div>
    </main>

@endsection