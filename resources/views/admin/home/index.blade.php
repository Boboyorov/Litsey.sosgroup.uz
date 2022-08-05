@extends('layouts.admin_layout')

@section('title', 'Home')
@section('content')
    
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Home</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $sliders_count }}</h3>

            <p>slider</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="{{ route('slider.index') }}" class="small-box-footer">All slider<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $article_count }}</h3>

            <p>News</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="{{ route('article.index') }}" class="small-box-footer">All News<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $varticle_count }}</h3>

            <p>Ads</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="{{ route('varticle.index') }}" class="small-box-footer">All Ads<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $video_count }}</h3>

            <p>Video</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="{{ route('video.index') }}" class="small-box-footer">All Video<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $department_count }}</h3>

            <p>Chair</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="{{ route('department.index') }}" class="small-box-footer">All Chair<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>


      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $administrator_count }}</h3>

            <p>Administration</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="{{ route('administrator.index') }}" class="small-box-footer">All Administrations<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $contact_count }}</h3>

            <p>Contacts</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="{{ route('callback.index') }}" class="small-box-footer">All Contacts<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
     
    </div>
    <!-- /.row -->
    <!-- Main row -->
   
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection
