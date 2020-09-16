@extends('layouts.main_index')

{{-- Title --}}
@section('title')
NEPSE Api
@endsection

@section('blog-css')
<link href={{ asset('css/resume.css') }} rel="stylesheet">
@endsection

@section('blog_head')
@include('share.layouts.navbar')
@endsection


@section('posts')
<div class=" min-view-height">
    {{-- @include('resume.details') --}}
    
    <div class="container">
		<h3 class="my-3">NEPSE Api</h3>

		<iframe src="https://ghbtns.com/github-btn.html?user=bishaludas&repo=NEPSE-Api&type=star&count=true&size=large" frameborder="0" scrolling="0" width="170" height="30" title="GitHub"></iframe>
		<!-- Table begins -->
		<table class="table table-striped">
			<thead>
				<th>Nepse's Data</th>
				<th>Api</th>
			</thead>
			<tbody>
            <td><a href="{{asset('/storage/nepse/todays_share.html')}}">Todays Share</a></td>
				<td><a href="{{route('api.todayshare')}}">Todays Share api</a></td>
			</tbody>
		</table>
	</div>
</div>

@endsection