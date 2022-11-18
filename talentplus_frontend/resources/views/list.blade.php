<?php $title = 'List page'; ?>

@section('pageTitle') {{ $title }} |  @endsection

@extends('templates.template')

@section('main_content')

  <div class="container">
    <h1>List of TALENT PLUS entries from database</h1>
    <div class="table-responsive-sm">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Serial #</th>
            <th scope="col">ID</th>
            <th scope="col">Content</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $rowNumber = 1; ?>
  @foreach($responseDisplay->data as $item)
          <tr class="table-light">
            <td scope="row">{{ $rowNumber++ }}</td>
            <td>{{ $item->id }}</td>
            <td>{{ $item->body }}</td>
            <td><?php 
  $machineFormatDate = $item->created_at;
  $newDateFormat = date("l, F j, Y. g:i A", strtotime($machineFormatDate));
  echo $newDateFormat;
          ?></td>
            <td><a href="{{ route('single', $item->id) }}" class="form-control btn btn-success col-md-4">View full post</a></td>
          </tr>
  @endforeach
          <tr class="table-light">
            <th scope="row">{{-- $responseDisplay->data()->links() --}}</th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

@endsection