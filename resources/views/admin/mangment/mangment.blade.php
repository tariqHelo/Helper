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
								<div class="tools">
									<a href="javascript:;" class="collapse" data-original-title="" title="">
									</a>
									<a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
									</a>
									<a href="javascript:;" class="reload" data-original-title="" title="">
									</a>
									<a href="javascript:;" class="remove" data-original-title="" title="">
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
										<div class="col-md-6">
											<div class="btn-group pull-right">
												<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
												</button>
												<ul class="dropdown-menu pull-right">
													<li>
														<a href="javascript:;">
														Print </a>
													</li>
													<li>
														<a href="javascript:;">
														Save as PDF </a>
													</li>
													<li>
														<a href="javascript:;">
														Export to Excel </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div id="sample_editable_1_wrapper" class="dataTables_wrapper no-footer"><div class="row"><div class="col-md-6 col-sm-6"><div class="dataTables_length" id="sample_editable_1_length"><label> <div class="select2-container form-control input-xsmall input-inline" id="s2id_autogen1"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">&nbsp;</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen2_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-2">   </ul></div></div><select name="sample_editable_1_length" aria-controls="sample_editable_1" class="form-control input-xsmall input-inline select2-offscreen" tabindex="-1" title=""><option value="5">5</option><option value="15">15</option><option value="20">20</option><option value="-1">All</option></select> records</label></div></div><div class="col-md-6 col-sm-6"><div id="sample_editable_1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-small input-inline" placeholder="" aria-controls="sample_editable_1"></label></div></div></div><div class="table-scrollable"><table class="table table-striped table-hover table-bordered dataTable no-footer" id="sample_editable_1" role="grid" aria-describedby="sample_editable_1_info">
								<thead>
								<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
										 Username
									: activate to sort column ascending" style="width: 165px;">
										 Username
									</th><th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
										 Full Name
									: activate to sort column ascending" style="width: 207px;">
										 Full Name
									</th><th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
										 Points
									: activate to sort column ascending" style="width: 114px;">
										 Points
									</th><th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
										 Notes
									: activate to sort column ascending" style="width: 139px;">
										 Notes
									</th><th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
										 Edit
									: activate to sort column ascending" style="width: 82px;">
										 Edit
									</th><th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1" colspan="1" aria-label="
										 Delete
									: activate to sort column ascending" style="width: 115px;">
										 Delete
									</th></tr>
								</thead>
								<tbody>
								
								
								
								
								
								
								<tr role="row" class="odd">
									<td class="sorting_1">
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
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr><tr role="row" class="even">
									<td class="sorting_1">
										 gist124
									</td>
									<td>
										 Nick Roberts
									</td>
									<td>
										 62
									</td>
									<td class="center">
										 new user
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr><tr role="row" class="odd">
									<td class="sorting_1">
										 goldweb
									</td>
									<td>
										 Sergio Jackson
									</td>
									<td>
										 132
									</td>
									<td class="center">
										 elite user
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr><tr role="row" class="even">
									<td class="sorting_1">
										 lisa
									</td>
									<td>
										 Lisa Wong
									</td>
									<td>
										 434
									</td>
									<td class="center">
										 new user
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr><tr role="row" class="odd">
									<td class="sorting_1">
										 nick12
									</td>
									<td>
										 Nick Roberts
									</td>
									<td>
										 232
									</td>
									<td class="center">
										 power user
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr><tr role="row" class="even">
									<td class="sorting_1">
										 webriver
									</td>
									<td>
										 Antonio Sanches
									</td>
									<td>
										 462
									</td>
									<td class="center">
										 new user
									</td>
									<td>
										<a class="edit" href="javascript:;">
										Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr></tbody>
								</table></div><div class="row"><div class="col-md-5 col-sm-5"><div class="dataTables_info" id="sample_editable_1_info" role="status" aria-live="polite">Showing 1 to 6 of 6 entries</div></div><div class="col-md-7 col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="sample_editable_1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="sample_editable_1" tabindex="0" id="sample_editable_1_previous"><a href="#"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button active" aria-controls="sample_editable_1" tabindex="0"><a href="#">1</a></li><li class="paginate_button next disabled" aria-controls="sample_editable_1" tabindex="0" id="sample_editable_1_next"><a href="#"><i class="fa fa-angle-right"></i></a></li></ul></div></div></div></div>
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