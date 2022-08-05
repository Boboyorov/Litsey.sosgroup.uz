{{-- @extends('layouts.admin_layout')

@section('title', 'Все видео')
    
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Добавить видео</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- end page title end breadcrumb -->
        <form action="{{ route('video.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="card">
                <div class="card-body">


                  <div class="row">
                    <div class="col-md-12">
                     <label for="content">Контент</label>
                     <textarea type="text" name="content" id="content" class="editor"></textarea>
                     @if($errors->has('content'))
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                         {{ $errors->first('content') }}
                     </div>
                     @endif
                   </div>
                </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="frame">Frame Youtube</label>
                            <input type="text" id="frame" class="form-control" name="frame">
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
                            <button type="submit" class="btn btn-success btn-block">Сохранить</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div><!-- container -->

</div>
@endsection --}}