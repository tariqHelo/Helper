@extends('layouts.admin')		
@section('content')
@include("shared.msg")


  <!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet box red">
		<div class="portlet-title">
			<div class="caption">
				<i class="fa fa-gift"></i> Import File Excel
			</div>
		</div>
		<div class="portlet-body form">
			<form role="form" method="POST" action="{{ route('qustion_excel') }}" enctype="multipart/form-data">
				@csrf
				<div class="form-body">
					<div class="form-group">
						<label>Excel File</label>
						<input type="file"  name="select_file" class="form-control input-lg" placeholder="input-lg">
					</div>
				<div class="form-actions left">
						<button type="submit" class="btn btn-circle btn-lg blue m-icon-big">
						Submit <i class="m-icon-big-swapdown m-icon-white"></i>
						</button>
				</div>				
			</form>
		</div>
     <!-- END SAMPLE FORM PORTLET-->







@endsection