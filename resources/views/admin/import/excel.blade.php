    
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
			<form role="form" method="POST" action="{{ route('risks') }}" enctype="multipart/form-data">
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
            <!-- BEGIN BORDERED TABLE PORTLET-->
            <div class=" portlet box yellow ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-coffee"></i>Table Data
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-bordered table-hover">
                        <thead>
                         <tr>
                            <th>
                                    #
                            </th>
                            <th>
                                 Name
                            </th>
                            <th>
                                description
                            </th>
                            <th>
                                    affected
                            </th>
                            <th>
                                    affectedProperty
                            </th>
                              <th>
                                 likelihood
                            </th>
                            <th>
                                impact
                            </th>
                            <th>
                                    inherentRiskScore
                            </th>
                              <th>
                                    treatmentOption
                            </th> 
                            <th>
                                    control
                            </th>  
                             
                            <th>
                                 treatmentDescription
                            </th>
                            <th>
                                riskCustodian
                            </th>
                            <th>
                                    riskOwner
                            </th>
                            <th>
                                treatmentDueDate
                            </th> 
                             <th>
                                 status
                            </th>
                            <th>
                                residualRiskScore
                            </th>
                            <th>
                                    riskValue
                            </th>
                            <th  style="width: 80px">
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                          {{-- @foreach($risks as $row)
                                <tr>
                                 <td>{{ $row->id }}</td>   

                                    <td>{{ $row->name }}</td>   
                                    <td>{{ $row->description }}</td>   
                                    <td>{{ $row->affected }}</td>   
                                    <td>{{ $row->affectedProperty }}</td>   
                                    <td>{{ $row->likelihood }}</td>   
                                    <td>{{ $row->impact }}</td>   
                                    <td>{{ $row->inherentRiskScore }}</td> 
                                    <td>{{ $row->treatmentOption }}</td>   
                                    <td>{{ $row->control }}</td>   
                                    <td>{{ $row->treatmentDescription }}</td>   
                                    <td>{{ $row->riskCustodian }}</td>   
                                    <td>{{ $row->riskOwner }}</td>   
                                    <td>{{ $row->treatmentDueDate }}</td>   
                                    <td>{{ $row->status }}</td>   
                                    <td>{{ $row->residualRiskScore }}</td>   
                                    <td>{{ $row->riskValue }}</td>   
                                    <td>   
                                            <a href="" data-target="#stack1" data-toggle="modal" class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                                            <a href="" onclick='return confirm("Are you sure dude?")' class="btn btn-warning btn-sm"><i class='fa fa-trash'></i></a>
									</td>
                                </tr> 
                         @endforeach --}}
                        <tr>
                            <th>
                                    #
                            </th>
                            <th>
                                 Name
                            </th>
                            <th>
                                description
                            </th>
                            <th>
                                    affected
                            </th>
                            <th>
                                    affectedProperty
                            </th>
                              <th>
                                 likelihood
                            </th>
                            <th>
                                impact
                            </th>
                            <th>
                                    inherentRiskScore
                            </th>
                              <th>
                                    treatmentOption
                            </th> 
                            <th>
                                    control
                            </th>  
                             
                            <th>
                                 treatmentDescription
                            </th>
                            <th>
                                riskCustodian
                            </th>
                            <th>
                                    riskOwner
                            </th>
                            <th>
                                treatmentDueDate
                            </th> 
                             <th>
                                 status
                            </th>
                            <th>
                                residualRiskScore
                            </th>
                            <th>
                                    riskValue
                            </th>
                              <th>
                                Action
                            </th>
                        </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END BORDERED TABLE PORTLET-->
        </div>
    </div>

    	{{--Start Add New --}}
					 <form action="" method="POST" id="stack1" class="modal fade" tabindex="-1" data-width="400">
						@csrf
						@method('POST')

						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
									<h4 class="modal-title">Add New</h4>
								</div>
								<div class="modal-body">
								<!-- form add -->
										
											<div class="modal-body">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Name</label>
													<div class="col-sm-9">
														<input type="text"name="name" value="{{ old('name') }}" class="form-control" placeholder="الإسم">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">description</label>
													<div class="col-sm-9">
														<input type="text" name="description" value="{{ old('description') }}" class="form-control" placeholder="أدخل الإيميل ">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">affected</label>
													<div class="col-sm-9">
														<input type="text" name="affected" value="{{ old('affected') }}" class="form-control" placeholder="رقم الجوال ">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">affectedProperty</label>
													<div class="col-sm-9">
														<input type="text" name="affectedProperty" value="{{ old('affectedProperty') }}" class="form-control" placeholder="رقم الهوية">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">likelihood</label>
													<div class="col-sm-9">
														<input type="text" name="likelihood" value="{{ old('likelihood') }}" class="form-control" placeholder="الصف">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">impact</label>
													<div class="col-sm-9">
														<input type="text" name="school" value="{{ old('school') }}" class="form-control" placeholder="المدرسة">
													</div>
												</div>
                                            </div>
                                             <div class="form-group row">
													<label class="col-sm-3 col-form-label">inherentRiskScore</label>
													<div class="col-sm-9">
														<input type="text"name="name" value="{{ old('name') }}" class="form-control" placeholder="الإسم">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">treatmentOption</label>
													<div class="col-sm-9">
														<input type="text" name="description" value="{{ old('description') }}" class="form-control" placeholder="أدخل الإيميل ">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">riskCustodian</label>
													<div class="col-sm-9">
														<input type="text" name="affected" value="{{ old('affected') }}" class="form-control" placeholder="رقم الجوال ">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">riskCustodian</label>
													<div class="col-sm-9">
														<input type="text" name="affected" value="{{ old('affected') }}" class="form-control" placeholder="رقم الجوال ">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">treatmentDueDate</label>
													<div class="col-sm-9">
														<input type="text" name="likelihood" value="{{ old('likelihood') }}" class="form-control" placeholder="الصف">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">status</label>
													<div class="col-sm-9">
														<input type="text" name="status" value="{{ old('status') }}" class="form-control" placeholder="المدرسة">
													</div>
                                                </div>
                                                
	                                            <div class="form-group row">
													<label class="col-sm-3 col-form-label">residualRiskScore</label>
													<div class="col-sm-9">
														<input type="text" name="likelihood" value="{{ old('likelihood') }}" class="form-control" placeholder="الصف">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">riskValue</label>
													<div class="col-sm-9">
														<input type="text" name="riskValue" value="{{ old('riskValue') }}" class="form-control" placeholder="المدرسة">
													</div>
                                                </div>
                                                
                                            </div>
                                            	<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="btn">Close</button>
									<button type="submit" class="btn red">Save</button>
								</div>
								</div>
							
							</div>
						</div>
					</form>
				{{--End Add New --}}
@endsection