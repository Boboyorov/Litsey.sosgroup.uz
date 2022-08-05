@extends('layouts.admin_layout')

@section('title', 'edit administration')
    
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">edit administration</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- end page title end breadcrumb -->
        <form action="{{ route('administrator.update', $administrator->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">


                  <div class="row">
                    <div class="col-md-12">
                        <label for="username">username</label>
                        <input type="text" id="username" class="form-control" value="{{ $administrator->username }}" name="username">
                        @if($errors->has('username'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ $errors->first('username') }}
                        </div>
                        @endif
                    </div>
                </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="title">title</label>
                            <input type="text" id="title" class="form-control" value="{{ $administrator->title }}" name="title">
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
                       <label for="content">content</label>
                       <textarea type="text" name="content" id="content" class="editor">{!! $administrator->content !!}</textarea>
                       @if($errors->has('content'))
                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                               <span aria-hidden="true"></span>
                           </button>
                           {{ $errors->first('content') }}
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
                        <div class="col-md-6">
                            <img src="{{ asset($administrator->image) }}" width="150" height="150" alt="">
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-block">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div><!-- container -->

</div>
@endsection
@section('custom_js')
@component('admin.utils.tinymce')@endcomponent
@endsection