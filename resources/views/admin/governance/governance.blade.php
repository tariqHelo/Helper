
@extends('layouts.admin')		
@section('content')

	<!-- BEGIN PAGE HEADER-->
				<h3 class="page-title">
				Bootstrap Form Controls <small>bootstrap form controls and more</small>
				</h3>
				<div class="page-bar">
					<a href="javascript:;" data-target="#stack2" data-toggle="modal" class="btn btn-lg green">
						Add New <i class="fa fa-plus"></i>
					</a>	
				</div>
				<!-- END PAGE HEADER-->
		<div class="row">
					<div class="col-md-12">
						<!-- BEGIN SAMPLE TABLE PORTLET-->
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-comments"></i>Define control Framwork
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-scrollable">
									<table class="table table-striped table-hover">
									<thead>
									<tr>
										<th>
											 #
										</th>
										<th>
											 Framwork Name
										</th>
										<th>
											 Framwork  Discription
										</th>
										<th>
											 file
										</th>
										<th>
											 Status
										</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td>
											 1
										</td>
										<td>
											 Mark
										</td>
										<th>
											 file
										</th>
										<td>
											 makr124
										</td>
										<td>   
                                            <a href="" data-target="#stack1" data-toggle="modal" class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                                            <a href="" onclick='return confirm("Are you sure dude?")' class="btn btn-warning btn-sm"><i class='fa fa-trash'></i></a>
										</td>
									</tr>
									<tr>
										<td>
											 2
										</td>
										<td>
											 Jacob
										</td>
                                        <th>
											 file
										</th>
										<td>
											 jac123
										</td>
										<td>   
                                            <a href="" data-target="#stack1" data-toggle="modal" class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                                            <a href="" onclick='return confirm("Are you sure dude?")' class="btn btn-warning btn-sm"><i class='fa fa-trash'></i></a>
										</td>
									</tr>
									</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- END SAMPLE TABLE PORTLET-->
                    </div>
                         {{--Start Add New --}}
					 <form action="" method="POST" id="stack2" class="modal fade" tabindex="-1" data-width="400">
					

						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
									<h4 class="modal-title">Add New Framwork Discription</h4>
								</div>
								<div class="modal-body">
								<!-- form add -->
											<div class="modal-body">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label"> Framwork Name</label>
													<div class="col-sm-9">
														<input type="text"name="name" value="{{ old('') }}" class="form-control" placeholder="Enter Framwork Name">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Framwork  Discription</label>
													<div class="col-sm-9">
                                                        <textarea type="text" name="framwork" class="form-control" value="{{ old('') }}"  rows="7" placeholder=" Enter Framwork Discription "></textarea>
													</div>
												</div>
							                 	<div class="form-group row">
													<label class="col-sm-3 col-form-label">Uploade file </label>
													<div class="col-sm-9">
														<input type="file"name="name" value="{{ old('') }}" class="form-control" placeholder="Enter Framwork Name">
													</div>
												</div>
											</div>
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="btn">Close</button>
									<button type="submit" class="btn red">Save</button>
								</div>
							</div>
						</div>
					</form>
				{{--End Add New --}}
                    {{--Start Add New --}}
					 <form action="" method="POST" id="stack1" class="modal fade" tabindex="-1" data-width="400">
					

						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
									<h4 class="modal-title">Add New Framwork Discription</h4>
								</div>
								<div class="modal-body">
								<!-- form add -->
											<div class="modal-body">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label"> Framwork Name</label>
													<div class="col-sm-9">
														<input type="text"name="name" value="{{ old('') }}" class="form-control" placeholder="Enter Framwork Name">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Framwork  Discription</label>
													<div class="col-sm-9">
                                                        <textarea type="text" name="framwork" class="form-control" value="{{ old('') }}"  rows="7" placeholder=" Enter Framwork Discription "></textarea>
													</div>
												</div>
							                 	<div class="form-group row">
													<label class="col-sm-3 col-form-label">Uploade file </label>
													<div class="col-sm-9">
														<input type="file"name="name" value="{{ old('') }}" class="form-control" placeholder="Enter Framwork Name">
													</div>
												</div>
											</div>
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="btn">Close</button>
									<button type="submit" class="btn red">Save</button>
								</div>
							</div>
						</div>
					</form>
				{{--End Add New --}}

				
@endsection