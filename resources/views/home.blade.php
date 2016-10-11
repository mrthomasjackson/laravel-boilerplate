@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection

@section('contentheader_title')
	Home
@endsection

@section('contentheader_description')

@endsection

@section('breadcrumbs')
	{!! Breadcrumbs::render('home') !!}
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-sm-12">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Home</h3>
					</div>
					<div class="box-body">
						Content
					</div>
					<!-- /.box-body -->
				</div>
			</div>
		</div>
	</div>
@endsection

@section('page-scripts')
	<script>
		//Page Scripts Here
	</script>
@endsection