    
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
			<form role="form" method="POST" action="{{ route('import_excel') }}" enctype="multipart/form-data">
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
                        <a href="{{ route('Excelerisk.create') }}"  class="btn btn-lg green">
                            Add New <i class="fa fa-plus"></i>
                        </a>
                        <a href="{{ route('export') }}" class="btn btn-lg purple">
                            <span class="glyphicon glyphicon-tag">
                            </span>
                            Export </a>
				</div>				
			</form>
		</div>
            <!-- END SAMPLE FORM PORTLET-->
            	<div class="page-bar">
					
				</div>
            <!-- BEGIN BORDERED TABLE PORTLET-->
            <div class=" portlet box yellow ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-coffee"></i>Table Data
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                    @if($risks->count()>0)
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
                          @foreach($risks as $row)
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
                                    <a href="{{ route('edit-Excelerisk' , $row->id) }}"  class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                                    <a href="{{ route('risk-delete',      $row->id) }}" onclick='return confirm("Are you sure dude?")' class="btn btn-warning btn-sm"><i class='fa fa-trash'></i></a>
									</td>
                                </tr> 
                         @endforeach
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
                        <div class="d-flex justify-content-center">
									{{ 	 $risks->links()   }}
									</div>

										@else

											<div class="alert alert-warning"> Sorry there is no result to you </div>

										@endif
                    </div>
                </div>
            </div>
            <!-- END BORDERED TABLE PORTLET-->
        </div>
    </div>
@endsection