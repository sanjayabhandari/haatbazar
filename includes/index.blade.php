@extends('main')
@section('content')
@include('includes.index.slider')
<div class="page_content_offset">
				<div class="container">
					<!--banners-->
					@include('includes.index.banner')
					<div class="row clearfix">
		@include('includes.index.sidecontentmenu')
@include('includes.index.products')
@include('includes.index.bestsellers')
@include('includes.index.banner_down')
@include('includes.index.popularbrand')

				@endsection