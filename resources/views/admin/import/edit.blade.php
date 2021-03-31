@extends('layouts.admin')		
@section('content')
@include("shared.msg")

<div class="row">
<div class="col-md-12">
	<!-- BEGIN SAMPLE FORM PORTLET-->
	<div class="portlet light">
		<div class="portlet-title">
			<div class="caption font-green-haze">
				<i class="icon-settings font-green-haze"></i>
				<span class="caption-subject bold uppercase"> Edit Form</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form action="{{ route('Excelerisk.update',$risk->id) }}" method="post" role="form" class="form-horizontal">
				@csrf
				@method('PUT')
				<div class="form-body">
					<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>Name</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="name" value="{{ $risk->name }}" placeholder="Enter your name">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
				<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>description</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="description" value="{{ $risk->description }}" placeholder="Enter description">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
					<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>affected</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="affected" value="{{ $risk->affected }}"  placeholder="Enter affected">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
					<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>affectedProperty </label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="affectedProperty" value="{{ $risk->affectedProperty }}" placeholder="Enter affectedProperty">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
					<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>likelihood </label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="likelihood" value="{{ $risk->likelihood }}" placeholder="Enter likelihood">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
					<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f> impact</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="impact" value="{{ $risk->impact }}" placeholder="Enter impact">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
	
					<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>inherentRiskScore </label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="inherentRiskScore" value="{{ $risk->inherentRiskScore }}" placeholder="Enter inherentRiskScore">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>treatmentOption </label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="treatmentOption" value="{{ $risk->treatmentOption }}" placeholder="Enter treatmentOption">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						
					<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>treatmentDescription </label>
						<div class="col-md-10">
							<input type="text" class="form-control"name="treatmentDescription" value="{{ $risk->treatmentDescription }}"  placeholder="Enter treatmentDescription">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
					<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>control </label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="control" value="{{ $risk->control }}" placeholder="Enter control">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
					<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" for="form_control_1">riskCustodian </label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="riskCustodian" value="{{ $risk->riskCustodian }}"id="form_control_1" placeholder="Enter riskCustodian">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" for="form_control_1">riskOwner </label>
						<div class="col-md-10">
							<input type="text" class="form-control"name="riskOwner" value="{{ $risk->riskOwner }}" placeholder="Enter riskOwner">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" for="form_control_1">treatmentDueDate </label>
						<div class="col-md-10">
							<input type="text" class="form-control"name="treatmentDueDate" value="{{ $risk->treatmentDueDate }}" id="form_control_1" placeholder="Enter treatmentDueDate">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" for="form_control_1"> status</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="status" value="{{ $risk->status }}"id="form_control_1" placeholder="Enter status">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" for="form_control_1">residualRiskScore </label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="residualRiskScore" value="{{ $risk->residualRiskScore }}"id="form_control_1" placeholder="Enter residualRiskScore ">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" for="form_control_1">riskValue </label>
						<div class="col-md-10">
							<input type="text" class="form-control"name="riskValue" value="{{ $risk->riskValue }}"  placeholder="Enter riskValue">
							<div class="form-control-focus">
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

