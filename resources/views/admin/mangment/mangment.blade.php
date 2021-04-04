@extends('layouts.admin')		
@section('content')
@include("shared.msg")
			<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-edit"></i>Editable Table
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-toolbar">
									<div class="row">
										<div class="col-md-6">
											<div class="btn-group">
											<a href="{{ route('riskMangment.create') }}"  class="btn green">
												Add New <i class="fa fa-plus"></i>
												</a>
											</div>
										</div>
										<div class="col-md-6">
											<div class="btn-group pull-right">
											
											</div>
										</div>
									</div>
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
								<tr>
									<th>
										 #
									</th>
									<th>
										 Status
									</th>
									<th>
										 Subject
									</th>
									<th>
										 Inhernt Risk
									</th>
									<th>
										 Submission Date
									</th>
									<th>
										 Migration planned
									</th>
										<th>
										 Mangmant Review
									</th>
									<th>
										 Action
									</th>
								</tr>
								</thead>
								<tbody>
							@if($mangmants->count()>0)

									@foreach ($mangmants as $mangmant )
										<tr>
											<td>
												{{ $mangmant->id }}
											</td>
											<td>
												{{ $mangmant->status }}
											</td>
											<td>
												{{ $mangmant->subject }}
											</td>
											<td >
												{{ $mangmant->inhernRisk }}
											</td>
											<td>
												{{ $mangmant->submissionDate }}
											</td>
											<td>
												{{ $mangmant->migrationPlanned }}
											</td>
											<td>
												{{ $mangmant->mangmantReview }}
											</td>
											<th>
												<a href="{{ route('edit-delete'    ,  $mangmant->id) }}"  class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
												<a href="{{ route('mangment-delete' , $mangmant->id ) }}" onclick='return confirm("Are you sure dude?")' class="btn btn-warning btn-sm"><i class='fa fa-trash'></i></a>
											</th>
										</tr>
				     				@endforeach
							
								</tbody>
								</table>
								  <div class="d-flex justify-content-center">
									{{ 	 $mangmants->links()   }}
									</div>

										@else

											<div class="alert alert-warning"> Sorry there is no result to you </div>

										@endif
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
				</div>
				<!-- END PAGE CONTENT -->
			</div>
		</div>
		<!-- END CONTENT -->
@endsection