@extends('layouts.admin_layout')

@section('title', 'All Contact')

@section('content')

<div class="page-content-wrapper ">

  <div class="container-fluid">

      <div class="row">
          <div class="col-sm-12">
              <div class="page-title-box">
                  <h4 class="page-title">List of Contact</h4>
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
                          <th>adress</th>
                          <th>email</th>
                          <th>moljal</th>
                          <th colspan="2" style="width: 2%;">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($callbacks as $callback)
                      <tr>
                          <td>{{ $callback->id }}</td>
                          <td>{{ $callback->adress }}</td>
                          <td>{{ $callback->email}}</td>
                          <td>{{ $callback->moljal }}</td>
                          <td>
                              <a href="{{ route('callback.edit', $callback->id) }}" class="btn btn-primary">
                                  <i class="fa fa-edit">Edit</i>
                              </a>
                          </td>
                          {{-- <td>
                              <form action="{{ route('callback.destroy', $callback->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">
                                      <i class="fa fa-trash">Delete</i>
                                  </button>
                              </form>
                          </td> --}}
                      </tr>
                      @endforeach
                  </tbody>
              </table>

              {{-- {!! $articles->links() !!} --}}
          </div>
      </div>

  </div>
</div>




@endsection
