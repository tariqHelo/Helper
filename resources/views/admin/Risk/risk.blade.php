@extends('layouts.admin')		
@section('content')		
	<!-- BEGIN PAGE CONTENT-->
<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>Plan Migration
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
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
								
								</div>
							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>
										ID
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
										Submition Date
								</th>
								<th>
										Migrtion Planned
								</th>
								<th>
										Mangment Review 
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
							</tr>
							<tr>
								<td>
										lisa
								</td>
								<td>
										Lisa Wong
								</td>
								<td>
										434
								</td>
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
							</tr>
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
							</tr>
							<tr>
								<td>
										lisa
								</td>
								<td>
										Lisa Wong
								</td>
								<td>
										434
								</td>
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
							</tr>
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
							</tr>
							<tr>
								<td>
										lisa
								</td>
								<td>
										Lisa Wong
								</td>
								<td>
										434
								</td>
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