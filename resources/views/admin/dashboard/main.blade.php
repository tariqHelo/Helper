@extends('layouts.admin')		
@section('content')

	<!-- END INTERACTIVE CHART PORTLET-->
						<!-- BEGIN BASIC CHART PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-gift"></i>Bar Chart
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
								<div id="chart_1_1_legendPlaceholder">
								</div>
								<div id="chart_1_1" class="chart">
								</div>
							</div>
						</div>
						<!-- END BASIC CHART PORTLET-->
@endsection