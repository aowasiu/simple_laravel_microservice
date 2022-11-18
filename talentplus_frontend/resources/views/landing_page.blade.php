<?php $title = 'Home page'; ?>

@section('pageTitle') {{ $title }} |  @endsection

@extends('templates.template')

@section('main_content')

  <div class="container">
    <h1>Welcome!</h1>
    <div class="row">
      <p>Hello. You've arrived at Project 1: Fetching data via API in a multi-microservice application.</p>
      <p>You can navigate to the list of API data served from the backend at:</p>
      <b>http://localhost/talentplus_frontend/public/list</b>
      <p>Or you may use the 'List' button in the header</p>
    </div>
  </div>

@endsection