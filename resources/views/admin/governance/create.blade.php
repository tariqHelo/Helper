
@extends('layouts.admin')		
@section('content')

	<!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet light">
		<div class="portlet-title">
			<div class="caption font-green-haze">
				<i class="icon-settings font-green-haze"></i>
				<span class="caption-subject bold uppercase"> Create Form</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form  action="{{ route('governance.store') }}"  method="post" role="form" class="form-horizontal">
				@csrf
				<div class="form-body">
					<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>Name</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter your name">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>Name</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter your name">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>Name</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter your name">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>Name</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter your name">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>Name</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter your name">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>Name</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter your name">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
				</div>
				<div class="form-actions">
					<div class="row">
						<div class="col-md-offset-2 col-md-10">
							<a href="{{ route('Excelerisk.index') }}" type="button" class="btn default">Cancel</a>
							<button type="submit" class="btn blue">Submit</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

				
@endsection