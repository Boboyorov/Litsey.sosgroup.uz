@extends('layouts.admin_layout')

@section('title', 'All Slider')
    
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">All Slider</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
    @if (session('success'))
        <div class="alert alert-seccess" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
        </div>
      @endif 
  </div><!-- /.container-fluid -->
</div>


@if ($message = Session::get('success'))
  <div class="alert alert-success">
      <p>{{ $message }}</p>
  </div>
@endif

<table class="table table-bordered ml-2">
  <tr>
      <th style="text-align: center">No</th>
      <th>Images</th>
      <th>Title</th>
      <th>Description</th>
      <th width="280px">Action</th>
      <th></th>
  </tr>
  @foreach ($sliders as $slider)
  <tr>
      <td>{{ $slider->id }}</td>
      <td><img src="{{ $slider->image }}" width="100px"></td>
      <td>{{ $slider->title }}</td>
      <td>{{ $slider->description }}</td>
      <td>
          <form action="{{ route('slider.destroy',$slider->id) }}" method="POST">

              <a class="btn btn-primary" href="{{ route('slider.edit',$slider->id) }}"><i class="fas fa-pencil-alt">
              </i>Edit</a>

              @csrf
              @method('DELETE')
  
              <button type="submit" class="btn btn-danger"><i class="fas fa-trash">
              </i>Delete</button>
          </form>
      </td>
  </tr>
  @endforeach
</table>

{{-- {!! $slider->links() !!} --}}

@endsection