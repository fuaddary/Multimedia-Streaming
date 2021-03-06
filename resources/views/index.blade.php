@extends('layouts.main')

@section('title')
    Multimedia Converter
@endsection

@section('contents')

<div class="bg-image my-20" style="background-image: url('assets/img/photos/photo26@2x.jpg');">
    <div class="bg-black-op-75">
        <div class="content content-top content-full text-center">
            <div class="py-20">
                <h1 class="h2 font-w700 text-white mb-10">Multimedia Streaming</h1>
            </div>
        </div>
    </div>
</div>

<div class="row gutters-tiny">
    <!-- Row #6 -->
    <div class="col-md-6 col-xl-6">
        <a class="block block-transparent" href="{{url('/audio')}}">
            <div class="block-content block-content-full bg-danger text-center">
                <div class="item item-2x item-circle bg-black-op-10 mx-auto mb-20">
                    <i class="fa fa-music text-danger-light"></i>
                </div>
                <div class="font-size-h3 font-w600 text-white">Audio</div>
                <div class="font-size-sm font-w600 text-uppercase text-danger-light">Streaming</div>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-6">
        <a class="block block-transparent" href="{{url('/video')}}">
            <div class="block-content block-content-full bg-elegance text-center">
                <div class="item item-2x item-circle bg-black-op-10 mx-auto mb-20">
                    <i class="fa fa-film text-elegance-lighter"></i>
                </div>
                <div class="font-size-h3 font-w600 text-white">Video</div>
                <div class="font-size-sm font-w600 text-uppercase text-elegance-lighter">Streaming</div>
            </div>
        </a>
    </div>
@endsection

@section('custom-js')
        <script src="assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/js/plugins/easy-pie-chart/jquery.easypiechart.min.js"></script>
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_blocks_widgets_stats.js"></script>
        <script>
            jQuery(function () {
                // Init page helpers (Easy Pie Chart plugin)
                Codebase.helpers('easy-pie-chart');
            });
        </script>
@endsection