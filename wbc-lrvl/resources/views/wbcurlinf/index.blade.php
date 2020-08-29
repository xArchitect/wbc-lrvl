@extends('adminlte::page')

@section('title', 'URL Info')

@section('content_header')
<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1>URL Info</h1>
		</div>
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item">Setting</li>
				<li class="breadcrumb-item">URL Info</li>
				<li class="breadcrumb-item active">Index</li>
			</ol>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
@stop 

@section('content')
<div class="row">
	<div class="col-12">
		<div class="row">
			<div class="col-md-12">
				<a href="{{ url('/wbcurlinf/create') }}" class="btn btn-info mb-2">Add</a> <br>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>SEQ</th>
							<th>SITE</th>
							<th>URL</th>
							<th>Page Name</th>
							<th>Start Page</th>
							<th>End Page</th>
							<th>Table ID</th>
							<th>Table Name</th>
							<th>Select SQL Type</th>
							<th>Use</th>
							<td colspan="3">Action</td>
						</tr>
					</thead>
					<tbody>
						@foreach($posts as $post)
						<tr>
							<td>{{ $post->seq }}</td>
							<td>{{ $post->site }}</td>
							<td>{{ $post->url }}</td>
							<td>{{ $post->param_page_nm }}</td>
							<td>{{ $post->start_page }}</td>
							<td>{{ $post->end_page }}</td>
							<td>{{ $post->tbl_id }}</td>
							<td>{{ $post->tbl_nm }}</td>
							<td>{{ $post->slct_sql_typ }}</td>
							<td>{{ $post->use_yn }}</td>
							<td><a href="{{  route('wbcitminf.index',['seq' => $post->seq]) }}" class="btn btn-primary">Item List</a></td>
							<td><a href="{{  route('wbcurlinf.edit',$post->seq) }}" class="btn btn-primary">Edit</a></td>
							<td>
								<form action="{{  route('wbcurlinf.destroy',$post->seq) }}" method="post">
								{!! method_field('DELETE') !!}
									{{ csrf_field() }}
									<button class="btn btn-danger" type="submit">Delete</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{!! $posts->links() !!}
			</div>
		</div>
	</div>
</div>
@stop
