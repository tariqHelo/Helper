@extends("layouts.admin")

@section("content")
    <table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>
						Question
				</th>
				<th>
						Yes
				</th>
				<th>
						No
				</th>
			</tr>
		</thead>
		<tbody>
			@php $i = 1; @endphp
			@foreach($data as $index => $d)
			<tr>
				<td>
					{{  $i }}
				</td>
				<td>
						{{ $index  }}
				</td>
				<th>
						{{ isset($d['yes']) ? $d['yes'] : 0 }}
				</th>
				<td>
						{{ isset($d['no']) ? $d['no'] : 0 }}
				</td>
			</tr>
			@php $i++ @endphp
			@endforeach
		</tbody>
	</table>
@endsection