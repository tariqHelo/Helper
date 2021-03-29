@extends('layouts.admin')
@section('content')
{{-- @can('permission_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.permissions.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.permission.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.permission.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Permission">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.permission.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.permission.fields.title') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($permissions as $key => $permission)
                        <tr data-entry-id="{{ $permission->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $permission->id ?? '' }}
                            </td>
                            <td>
                                {{ $permission->title ?? '' }}
                            </td>
                            <td>
                                @can('permission_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.permissions.show', $permission->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('permission_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.permissions.edit', $permission->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan
                                @can('permission_delete')
                                    <form action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> --}}
		<!-- BEGIN PAGE CONTENT-->
				<div class="row">

					<div class="col-md-12 col-sm-12">
                        <div style="margin-bottom: 10px;" class="row">
                        <div class="col-lg-12">
                            <a class="btn btn-success" href="{{ route("permissions.create") }}">
                                {{ trans('global.add') }} {{ trans('cruds.permission.title_singular') }}
                            </a>
                        </div>
                    </div>
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-cogs"></i>Table
								</div>
								<div class="actions">
									<a href="javascript:;" class="btn btn-default btn-sm">
									<i class="fa fa-plus"></i> Add </a>
								</div>
							</div>
							<div class="portlet-body">
								<table class="table table-striped table-bordered table-hover" id="sample_3">
								<thead>
								<tr>
									<th class="table-checkbox">
										<input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/>
									</th>
									<th>
										 id
									</th>
									<th>
										 title
									</th>
									<th>
										 Status
									</th>
								</tr>
								</thead>
								<tbody>
                                @foreach($permissions as $key => $permission)
                                    <tr class="odd gradeX">
                                        <td>
                                            <input type="checkbox" class="checkboxes" value="1"/>
                                        </td>
                                        <td>
                                         {{ $permission->id ?? '' }}
                                        </td>
                                        <td>
                                         {{ $permission->title ?? '' }}

                                        </td>
                                        <td>
                                            <a class="btn btn-xs btn-primary" href="{{ route('permissions.show', $permission->id) }}">
                                                {{ trans('global.view') }}
                                            </a>

                                            <a class="btn btn-xs btn-info" href="{{ route('permissions.edit', $permission->id) }}">
                                                {{ trans('global.edit') }}
                                            </a>
                                            <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
								</tbody>
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
		</div>
@endsection