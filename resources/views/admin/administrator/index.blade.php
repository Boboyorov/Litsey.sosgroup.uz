@extends('layouts.admin_layout')

@section('title', 'Add administration')

@section('content')
<div class="page-content-wrapper ">

  <div class="container-fluid">

      <div class="row">
          <div class="col-sm-12">
              <div class="page-title-box">
                  <h4 class="page-title">Add administration</h4>
              </div>
          </div>
          <div class="clearfix"></div>
      </div>

      <div class="card">
          <div class="card-body">

              @if(session('message'))

              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  {{ session('message') }}
              </div>

              @endif

              <table class="table table-hover table-bordered">
                  <thead>
                      <tr>
                          <th style="width: 2%;">#</th>
                          <th>picture</th>
                          <th>username</th>
                          <th>title</th>
                          <th colspan="2" style="width: 2%;">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($administrators as $administrator)
                      <tr>
                          <td>{{ $administrator->id }}</td>
                          <td>
                              <img src="{{ asset($administrator->image) }}" alt="" width="35" height="35">
                          </td>
                          <td>{{ $administrator->username }}</td>
                          <td>{{ $administrator->title }}</td>
                          <td>
                              <a href="{{ route('administrator.edit', $administrator->id) }}" class="btn btn-primary">
                                  <i class="fa fa-edit">Edit</i>
                              </a>
                          </td>
                          <td>
                              <form action="{{ route('administrator.destroy', $administrator->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">
                                      <i class="fa fa-trash">Delete</i>
                                  </button>
                              </form>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>

          </div>
      </div>

  </div>
</div>

@endsection

{{-- <h1>hello world</h1> --}}