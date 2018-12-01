@extends('layouts.main')

@section('title')
    Multimedia Converter
@endsection

@section('custom-css')
<style type="text/css">
	input[type="file"] {
	    display: none;
	}
</style>
@endsection

@section('contents')
			
<div class="row">
	<div class="col-xl-12">
		<div class="block block-themed">
            <div class="block-header bg-elegance">
                <h3 class="block-title">Video Streaming Channel</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                </div>
            </div>
        </div>
    <video width="100%" controls>
                <source src="http://10.151.254.63:8000/source.ogg" type="video/ogg">
    </video>'

	</div>
</div>
                    
@endsection