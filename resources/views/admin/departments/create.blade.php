@extends('layouts.admin_layout')

@section('title', 'All departments')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add departments</h1>
                </div><!-- /.col -->
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
     
<form action="{{ route('department.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="card-body">

      <div class="row">
          <div class="col-md-12">
              <label for="title">title</label>
              <input type="text" id="title" class="form-control" name="title">
              @if($errors->has('title'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  {{ $errors->first('title') }}
              </div>
              @endif
          </div>
      </div>
     
      <div class="row">
          <div class="col-md-12">
           <label for="text">Content</label>
           <textarea type="text" name="text" id="text" class="editor"></textarea>
           @if($errors->has('text'))
           <div class="alert alert-success alert-dismissible fade show" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
               {{ $errors->first('text') }}
           </div>
           @endif
         </div>
      </div>

      <div class="row" style="margin-top: 15px">
          <div class="col-md-6">
              <label for="image">picture</label>
              <input type="file" name="image" class="form-control-file">
              @if($errors->has('image'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  {{ $errors->first('image') }}
              </div>
              @endif
          </div>
      </div>
      <div class="row" style="margin-top: 15px">
          <div class="col-md-12">
              <button type="submit" class="btn btn-success btn-block">Save</button>
          </div>
      </div>
  </div>
     
</form>
@endsection