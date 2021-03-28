@extends('layouts.admin')		
@section('content')
@include("shared.msg")



			<!-- BEGIN ROW -->
						<div class="row">
							<div class="col-md-6">
								<!-- BEGIN CHART PORTLET-->
								<div class="portlet light">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-bar-chart font-green-haze"></i>
											<span class="caption-subject bold uppercase font-green-haze"> Simple Pie Chart</span>
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="fullscreen">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body">
										<div id="chart_6" class="chart" style="height: 525px;">
										</div>
									</div>
								</div>
								<!-- END CHART PORTLET-->
							</div>
							<div class="col-md-6">
								<!-- BEGIN CHART PORTLET-->
								<div class="portlet light">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-bar-chart font-green-haze"></i>
											<span class="caption-subject bold uppercase font-green-haze"> 3D Pie Chart</span>
											<span class="caption-helper">bar and line chart mix</span>
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="fullscreen">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body">
										<div id="chart_7" class="chart" style="height: 400px;">
										</div>
										<div class="well margin-top-20">
											<div class="row">
												<div class="col-sm-3">
													<label class="text-left">Top Radius:</label>
													<input class="chart_7_chart_input" data-property="topRadius" type="range" min="0" max="1.5" value="1" step="0.01"/>
												</div>
												<div class="col-sm-3">
													<label class="text-left">Angle:</label>
													<input class="chart_7_chart_input" data-property="angle" type="range" min="0" max="89" value="30" step="1"/>
												</div>
												<div class="col-sm-3">
													<label class="text-left">Depth:</label>
													<input class="chart_7_chart_input" data-property="depth3D" type="range" min="1" max="120" value="40" step="1"/>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- END CHART PORTLET-->
							</div>
						</div>
						<!-- END ROW -->
						<!-- BEGIN ROW -->
						<div class="row">
							<div class="col-md-6">
								<!-- BEGIN CHART PORTLET-->
								<div class="portlet light">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-bar-chart font-green-haze"></i>
											<span class="caption-subject bold uppercase font-green-haze"> Polar Chart</span>
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="fullscreen">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body">
										<div id="chart_8" class="chart" style="height: 400px;">
										</div>
									</div>
								</div>
								<!-- END CHART PORTLET-->
							</div>
							<div class="col-md-6">
								<!-- BEGIN CHART PORTLET-->
								<div class="portlet light">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-bar-chart font-green-haze"></i>
											<span class="caption-subject bold uppercase font-green-haze"> Radar Chart</span>
											<span class="caption-helper">bar and line chart mix</span>
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="fullscreen">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body">
										<div id="chart_9" class="chart" style="height: 400px;">
										</div>
									</div>
								</div>
								<!-- END CHART PORTLET-->
							</div>
						</div>
						<!-- END ROW -->

@endsection