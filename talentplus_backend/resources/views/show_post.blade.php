<?php $title = 'Post'; ?>

@section('pageTitle') {{ $title }} |  @endsection

@extends('templates.template')

@section('main_content')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

      <article class="my-3" id="input-group">
        <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
          <h1>Post</h1>
        </div>

        <div class="bd-example">
          <hr/>
            
          @if( session('info') )
          <!-- Message -->
          <div class="col-sm-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('info') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          <div class="col">
            <h5 class="card-title"><b>Post body</b></h5>
            <div class="card">
              <div class="card-body">
                <p class="card-text">{{{ $postData->body }}}</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Created on:</b> <?php $modified_date = date_create_from_format('Y-m-d H:i:s', "$postData->created_at"); echo date_format($modified_date, 'l, F j, Y. g:i A'); ?></li>
                <li class="list-group-item"><b>Updated on:</b> <?php $modified_date = date_create_from_format('Y-m-d H:i:s', "$postData->updated_at"); echo date_format($modified_date, 'l, F j, Y. g:i A'); ?></li>
              </ul>
            </div>
          </div>
          <div class="input-group" style="margin-top: 15px;">
            <a href="{{ route('edit_post', $postData->id) }}" class="btn btn-primary col-md-4">Edit</a>
            <div class="col-md-4"></div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropLive">
              Delete this post
            </button>
          </div>
        </div>
      </article>

    </main>

<!------------- Beginning of post deletion modal --------------->
<div class="modal fade" id="staticBackdropLive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLiveLabel">Delete Alert!!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this post. You will lose it forever, if you do.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Don't delete it.</button>
        <a href="{{ route('delete_post', $postData->id) }}" class="btn btn-danger">I understand. Delete it.</a>
      </div>
    </div>
  </div>
</div>
<!------------- End of deletion modal --------------->

{{ session()->forget('info') }}
@endsection