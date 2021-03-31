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
				<span class="caption-subject bold uppercase"> Create Form</span>
			</div>
		</div>
		<div class="portlet-body form">
			<form role="form" class="form-horizontal">
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
						<label class="col-md-2 control-label" f>description</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="Enter description">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
					<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>affected</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="affected" value="{{ old('affected') }}"  placeholder="Enter affected">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
					<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>affectedProperty </label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="affectedProperty" value="{{ old('affectedProperty') }}" placeholder="Enter affectedProperty">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
					<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>likelihood </label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="likelihood" value="{{ old('likelihood') }}" placeholder="Enter likelihood">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
					<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f> impact</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="impact" value="{{ old('impact') }}" placeholder="Enter impact">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
	
					<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>inherentRiskScore </label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="inherentRiskScore" value="{{ old('inherentRiskScore') }}" placeholder="Enter inherentRiskScore">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>treatmentOption </label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="treatmentOption" value="{{ old('treatmentOption') }}" placeholder="Enter treatmentOption">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						
					<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>treatmentDescription </label>
						<div class="col-md-10">
							<input type="text" class="form-control"name="treatmentDescription" value="{{ old('treatmentDescription') }}"  placeholder="Enter treatmentDescription">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
					<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" f>control </label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="control" value="{{ old('control') }}" placeholder="Enter control">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
					<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" for="form_control_1">riskCustodian </label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="riskCustodian" value="{{ old('riskCustodian') }}"id="form_control_1" placeholder="Enter riskCustodian">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" for="form_control_1">riskOwner </label>
						<div class="col-md-10">
							<input type="text" class="form-control"name="riskOwner" value="{{ old('riskOwner') }}" placeholder="Enter riskOwner">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" for="form_control_1">treatmentDueDate </label>
						<div class="col-md-10">
							<input type="text" class="form-control"name="treatmentDueDate" value="{{ old('treatmentDueDate') }}" id="form_control_1" placeholder="Enter treatmentDueDate">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" for="form_control_1"> status</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="status" value="{{ old('status') }}"id="form_control_1" placeholder="Enter status">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" for="form_control_1">residualRiskScore </label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="residualRiskScore" value="{{ old('residualRiskScore') }}"id="form_control_1" placeholder="Enter residualRiskScore ">
							<div class="form-control-focus">
							</div>
						</div>
					</div>
						<div class="form-group form-md-line-input">
						<label class="col-md-2 control-label" for="form_control_1">riskValue </label>
						<div class="col-md-10">
							<input type="text" class="form-control"name="riskValue" value="{{ old('riskValue') }}"  placeholder="Enter riskValue">
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

