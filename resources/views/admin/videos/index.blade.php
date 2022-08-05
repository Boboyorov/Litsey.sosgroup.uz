@extends('layouts.admin_layout')

@section('title', 'Все видео')
    
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Список видео</h4>
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
                            <th>содержание</th>
                            <th colspan="2" style="width: 2%;">Действий</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($videos as $video)
                        <tr>
                            <td>{{ $video->id }}</td>
                            <td>{!! $video->content !!}</td>
                            <td>
                                <a href="{{ route('video.edit', $video->id) }}" class="btn btn-primary">
                                    <i class="fa fa-edit">Радактировать</i>
                                </a>
                            </td>
                            <td>
                                {{-- <form action="{{ route('video.destroy', $video->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash">Удалить</i>
                                    </button>
                                </form> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- {!! $video->links() !!} --}}
            </div>
        </div>

    </div>
</div>
@endsection