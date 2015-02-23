@extends('app')

{{-- Web site Title --}}
@section('title')
{{ Lang::choice('kotoba::account.profile', 2) }} :: @parent
@stop

@section('styles')
	<link href="{{ asset('assets/admin/css/jquery.dataTables.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/admin/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@stop

@section('scripts')
	<script src="{{ asset('assets/admin/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/admin/js/dataTables.bootstrap.js') }}"></script>
	<script src="{{ asset('assets/admin/js/bootstrap-dataTables-paging.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/restfulizer.js') }}"></script>
@stop

@section('inline-scripts')
var text_confirm_message = '{{ trans('kotoba::account.ask.delete') }}';

var oTable;
$(document).ready(function() {
	oTable = $('#table').dataTable({
		"sDom" : "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
		"sPaginationType" : "bootstrap",
		"bProcessing" : true,
		"bServerSide" : true,
		"sAjaxSource" : "{{ URL::to('api/profiles') }}",
	});
});
@stop



{{-- Content --}}
@section('content')

<div class="row">
<h1>
	<p class="pull-right">
	<a href="/profiles/create" class="btn btn-primary" title="{{ trans('kotoba::button.new') }}">
		<i class="fa fa-plus fa-fw"></i>
		{{ trans('kotoba::button.new') }}
	</a>
	</p>
	<i class="fa fa-users fa-lg"></i>
		{{ Lang::choice('kotoba::account.profile', 2) }}
	<hr>
</h1>
</div>


<div class="row">

"dom" : "T<'clear'>lfrtip",

<table id="table" class="table table-striped table-hover">
	<thead>
		<tr>
			<th>{{ trans('kotoba::account.first_name') }}</th>
			<th>{{ trans('kotoba::account.last_name') }}</th>

			<th>{{ trans('kotoba::account.primary_email') }}</th>
			<th>{{ trans('kotoba::account.email_2') }}</th>

			<th>{{ Lang::choice('kotoba::table.action', 2) }}</th>
		</tr>
	</thead>
	<tbody></tbody>
</table>

</div>

@stop
