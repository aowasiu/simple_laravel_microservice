<?php $title = 'View page'; ?>

@section('pageTitle') {{ $title }} |  @endsection

@extends('templates.template')

@section('main_content')

<div class="container">
    <div class="row g-5">
      <article class="blog-post">
        <h2 class="blog-post-title">{{ $responseDisplay['body'] }} </h2>
        <h3 class="blog-post-title">ID: {{ $responseDisplay['id'] }}</h3>
        <p class="blog-post-meta"><?php 
  $created_machineFormatDate = $responseDisplay['created_at'];
  $new_createdDateFormat = date("l, F j, Y. g:i A", strtotime($created_machineFormatDate));
          ?>Created on: {{ $new_createdDateFormat }}</p>
        <p class="blog-post-meta"><?php 
  $updated_machineFormatDate = $responseDisplay['updated_at'];
  $new_updatedDateFormat = date("l, F j, Y. g:i A", strtotime($updated_machineFormatDate));
          ?>Updated on: {{ $new_updatedDateFormat }}</p>
      </article>
    </div>
</div>

@endsection