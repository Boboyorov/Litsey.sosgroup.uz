@extends('layouts.admin_layout')

@section('title', 'Edit Slider')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-12">
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('slider.update',$slider->id) }}" method="POST" enctype="multipart/form-data"> 
    @csrf
    @method('PUT')
 
     <div class="row  ml-2">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" value="{{ $slider->title }}" class="form-control" placeholder="Заглавие">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Описание">{{ $slider->description }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Images:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
                <img src="/image/{{ $slider->image }}" width="300px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
 
</form>
@endsection