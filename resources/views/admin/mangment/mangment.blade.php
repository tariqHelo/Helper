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
												<button id="sample_editable_1_new" class="btn green">
												Add New <i class="fa fa-plus"></i>
												</button>
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
								<tr>
									<td>
										 alex
									</td>
									<td>
										 Alex Nilson
									</td>
									<td>
										 1234
									</td>
									<td class="center">
										 power user
									</td>
									<td>
										Edit 
									</td>
									<td>
										Delete 
									</td>
									<td>
										Edit 
									</td>
									<th>
										 <a href="" data-target="#stack1" data-toggle="modal" class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                                         <a href="" onclick='return confirm("Are you sure dude?")' class="btn btn-warning btn-sm"><i class='fa fa-trash'></i></a>
									</th>
		
								</tr>
							
								</tbody>
								</table>
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