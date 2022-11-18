<?php $title = 'Users page'; ?>

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

      <h2>Section title</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Photo</th>
              <th scope="col">Full name</th>
              <th scope="col">Joined on</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><br/><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
            <tr class="table-light">
              <th scope="row"><img src="{{ asset('assets/admin.jpg') }}" class="img-thumbnail" alt="full name"></th>
              <td>Bo Hanson</td>
              <td>03:45pm Nov 11, 2022</td>
              <td><button class="btn btn-sm btn-success" type="button">View User</button><br/><button class="btn btn-sm btn-danger" type="button">Delete User</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>

@endsection