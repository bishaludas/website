@extends('layouts.main_index')

{{-- Title --}}
@section('title')
{{env('APP_NAME')}} | Resume Builder
@endsection

@section('blog-css')
<link href={{ asset('css/resume.css') }} rel="stylesheet">
<link href={{ asset('css/avatar.css') }} rel="stylesheet">
@endsection

@section('blog_head')
@include('resume.layouts.navbar')
@include('resume.layouts.alert')
@endsection

@section('posts')
<div class=" min-view-height">
	<div class="container">
		<p class="font-weight-bold" style="font-size: 1.5rem">Build your resume</p>
		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-12">
				@include('resume.layouts.avatar')

				{!! Form::open(['method'=>'POST', 
				'action'=>'Resume\ResumeController@saveBuild', 'files'=>true, 
				'class'=>'resume-builder-form',
				'novalidate'=>"novalidate"]) !!}

				{{-- Form template --}}
				@include('resume.layouts.info')
				@include('resume.layouts.jobs')
				@include('resume.layouts.education')
				@include('resume.layouts.skills')
				@include('resume.layouts.summary')
				
				<div class="row my-5">
					<div class="col-lg-12">
						{!! Form::submit('Save and Next', ['class'=>'btn btn-success float-right']) !!}
						<a href="{{route('resume.home')}}" class="btn btn-secondary float-right px-5 mr-3">Cancel</a>
					</div>
				</div>
				{!! Form::close() !!}
			</div>

			<div class="col-lg-2  col-md-10 d-none d-sm-block">
				<div class="sticky-div">
					<div class="btn btn-outline-danger d-block mb-3 toggle-collapse disabled">Collapse All</div>
				</div>
			</div>
		</div>
	</div>	
</div>
@endsection

@section('footer-js')
<script src="{{asset('admin/js/core/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/core/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.1.2/tinymce.min.js"></script>
<script src="{{asset('js/resume.js')}}"></script>
<script src="{{asset('js/avatar.js')}}"></script>
@endsection