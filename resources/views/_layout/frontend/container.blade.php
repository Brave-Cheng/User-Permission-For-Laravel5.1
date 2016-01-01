@extends('_layout.frontend._base')
@section('container')
<div class="wrapper">
  @include('_layout.frontend._header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('_layout.frontend._leftSidebar');
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      成都红牌楼
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">单</sup></h3>
              <p>在运（待收）运单</p>
            </div>
            <div class="icon">
              <i class="fa fa-play"></i>
            </div>
            <a href="#" class="small-box-footer">查看全部 <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          </div><!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>22<sup style="font-size: 20px">单</sup></h3>
                <p>待发运单</p>
              </div>
              <div class="icon">
                <i class="fa fa-pause"></i>
              </div>
              <a href="#" class="small-box-footer">查看全部 <i class="fa fa-arrow-circle-right"></i></a>
            </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>67<sup style="font-size: 20px">单</sup></h3>
                  <p>待退运单</p>
                </div>
                <div class="icon">
                  <i class="fa fa-eject"></i>
                </div>
                <a href="#" class="small-box-footer">查看全部 <i class="fa fa-arrow-circle-right"></i></a>
              </div>
              </div><!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3>23<sup style="font-size: 20px">单</sup></h3>
                    <p>待收（微配）运单</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-compress"></i>
                  </div>
                  <a href="#" class="small-box-footer">查看全部 <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                </div><!-- ./col -->
                </div><!-- /.row -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="box">
                      <div class="box-header with-border">
                        <h3 class="box-title">
                        <span class="border-right">线路1&nbsp;</span>&nbsp;
                        <small class="border-right">蒋师傅（13809876322）&nbsp;</small>&nbsp;
                        <small class="border-right">从 <span class="text-aqua">玉林路口(2)</span> 前往 <span class="text-aqua">桐梓林东路(5)</span></small>
                        </h3>
                        <div class="box-tools pull-right" style="padding-top:4px">
                          <button class="btn btn-block btn-info btn-xs">详情</button>
                        </div>
                        </div><!-- /.box-header -->
                        <div class="progress progress-sm active">
                          <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">60% Complete (warning)</span>
                          </div>
                        </div>
                        <div class="box-body">
                          </div><!-- ./box-body -->
                          </div><!-- /.box -->
                          </div><!-- /.col -->
                          </div><!-- /.row -->
                          </section><!-- /.content -->
                          </div><!-- /.content-wrapper -->
                          <footer class="main-footer">
                            <div class="pull-right hidden-xs">
                              <b>Version</b> 2.3.0
                            </div>
                            <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
                          </footer>
                          </div><!-- ./wrapper -->
                          @stop
