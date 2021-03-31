@extends('layouts.admin')		
@section('content')
@include("shared.msg")
			<!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet light">
		<div class="portlet-title">
			<div class="caption font-green-haze">
				<i class="icon-settings font-green-haze"></i>
				<span class="caption-subject bold uppercase"> Create Form</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form  action="{{ route('riskMangment.store') }}"  method="post" role="form" class="form-horizontal">
				@csrf
				<div class="form-body">
					<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>Status</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="status" value="{{ old('status') }}" >
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>Subject</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="subject" value="{{ old('subject') }}" >
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>Inhern Risk</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="inhernRisk" value="{{ old('inhernRisk') }}" >
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>Submission Date</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="submissionDate" value="{{ old('submissionDate') }}" >
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>Migration Planned</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="migrationPlanned" value="{{ old('migrationPlanned') }}" >
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>Mangmant Review</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="mangmantReview" value="{{ old('mangmantReview') }}" >
							<div class="form-control-focus">
							</div>
						</div>
					</div>
				</div>
				<div class="form-actions">
					<div class="row">
						<div class="col-md-offset-2 col-md-10">
							<a href="{{ route('riskMangment.index') }}" type="button" class="btn default">Cancel</a>
							<button type="submit" class="btn blue">Submit</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- END SAMPLE FORM PORTLET-->

			
@endsection