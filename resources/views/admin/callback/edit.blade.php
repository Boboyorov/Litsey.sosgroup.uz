@extends('layouts.admin_layout')

@section('title', 'All contact')
    
@section('content')

<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Add a contact</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- end page title end breadcrumb -->
        <form action="{{ route('callback.update', $callback->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <label for="adress">adress</label>
                            <input type="text" id="adress" class="form-control" name="adress" value="{{ $callback->adress }}">
                            @if($errors->has('adress'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('adress') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                          <label for="moljal">moljal</label>
                          <input type="text" id="moljal" class="form-control" name="moljal" value="{{ $callback->moljal }}">
                          @if($errors->has('moljal'))
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                              {{ $errors->first('moljal') }}
                          </div>
                          @endif
                      </div>
                  </div>


                  <div class="row">
                    <div class="col-md-12">
                        <label for="bekat">station</label>
                        <input type="text" id="bekat" class="form-control" name="bekat" value="{{ $callback->bekat }}">
                        @if($errors->has('bekat'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ $errors->first('bekat') }}
                        </div>
                        @endif
                    </div>
                </div>


                <div class="row">
                  <div class="col-md-12">
                      <label for="email">email</label>
                      <input type="text" id="email" class="form-control" name="email" value="{{ $callback->email }}">
                      @if($errors->has('email'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          {{ $errors->first('email') }}
                      </div>
                      @endif
                  </div>
              </div>


              <div class="row">
                <div class="col-md-12">
                    <label for="phone">phone</label>
                    <input type="text" id="phone" class="form-control" name="phone" value="{{ $callback->phone }}">
                    @if($errors->has('phone'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ $errors->first('phone') }}
                    </div>
                    @endif
                </div>
            </div>
                   

            <div class="row">
              <div class="col-md-12">
                  <label for="frame">Frame maps</label>
                  <input type="text" id="frame" class="form-control" name="frame" value="{{ $callback->frame }}">
                  @if($errors->has('frame'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      {{ $errors->first('frame') }}
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
            </div>
        </form>

    </div><!-- container -->

</div>
@endsection
@section('custom_js')
@component('admin.utils.tinymce')@endcomponent
@endsection