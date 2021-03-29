@extends('layouts.admin')		
@section('content')
@include("shared.msg")
	<div class="row">
					<div class="col-md-12">
	<h3 class="page-title">
		Bootstrap Form Controls <small>bootstrap form controls and more</small>
		</h3>
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




	                  <!-- BEGIN PAGE CONTENT-->
			
						<div class="note note-success note-bordered">
							<p>
							  <h4> Qustions</h4>		
						   </p>
						</div>
						<!-- BEGIN PORTLET-->
						<form class="portlet light" method="post" action="{{ route('store-assignments') }}">
							@csrf
							@foreach ($qustions as $index => $qustion)
								<div class="portlet-title">
									<div class="caption font-purple-plum">
										<i class="icon-speech font-purple-plum"></i>
										<span class="caption-subject bold uppercase">{{ ' '.$qustion->id }}</span>
									</div>
								</div>
								<div class="portlet-body">
									<table class="table table-hover table-light gtreetable" id="gtreetable">
									<thead>
									<tr>
										<th>
										{{ $qustion->title }}
										</th>
									</tr>
									</thead>
									</table>
									<div class="form-group">
										<div class="checkbox-list">
											<input type="hidden" value="{{ $qustion->title }}" name="optionsRadios[{{ $index }}]['question']">
											<label>
											<input type="radio" name="optionsRadios[{{ $index }}]['answer']" id="optionsRadios[{{ $index }}]['answer']" value="yes" > Yes</label>
											<label>
											<input type="radio" name="optionsRadios[{{ $index }}]['answer']" id="optionsRadios[{{ $index }}]['answer']" value="no" > No </label>
										</div>
									</div>
							@endforeach
							</div>
						<div class="form-actions left">
							<button type="submit" class="btn btn-circle btn-lg blue m-icon-big">
							Ok <i class="m-icon-big-swapup m-icon-white"></i>
							</button>
				       </div>
					  </form>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
		</div>
		<!-- END CONTENT -->


@endsection