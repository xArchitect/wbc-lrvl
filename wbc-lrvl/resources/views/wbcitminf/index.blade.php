@extends('adminlte::page')

@section('title', 'URL Info')

@section('content_header')
<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1>Item Info</h1>
		</div>
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item">Setting</li>
				<li class="breadcrumb-item">Item Info</li>
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
				<div class="card card-secondary">
    				<div class="card-header">
                    	<h3 class="card-title">URL Info</h3>
                  	</div>
				</div>
				<form action="{{ route('wbcurlinf.update',$data->seq) }} " method="POST">
					@if ($data->seq != null) {!! method_field('PUT') !!} @endif
					<input type="hidden" class="form-control" name="seq" value="{{ $data->seq }}">
					@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Site</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Site" name="site" value="{{ $data->site }}" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Url</label>
						<div class="col-sm-10">
							<input type="text" class="form-control"  placeholder="Url" name="url" value="{{ $data->url }}" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Page Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Page Name" name="param_page_nm" value="{{ $data->param_page_nm }}" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Start Page</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Start Page" name="start_page" value="{{ $data->start_page }}" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">End Page</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="End Page" name="end_page" value="{{ $data->end_page }}" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Table ID</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Table ID" name="tbl_id" value="{{ $data->tbl_id }}" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Table Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Table Name" name="tbl_nm" value="{{ $data->tbl_nm }}" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">SQL Type</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="SQL Type" name="sql_type" value="{{ $data->slct_sql_typ }}" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Use</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Use" name="use_yn" value="{{ $data->use_yn }}" readonly>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12">
			<div class="form-group row">
			<div class="col-md-12">
				<a href="{{ route('wbcitminf.create',['url_inf_seq' => $data->seq]) }}" class="btn btn-info mb-2">Item Add</a>
				<a href="{{ url('/wbcurlinf') }}" class="btn btn-default float-right">URL Info List</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>SEQ</th>
							<th>Extract Type</th>
							<th>XPATH</th>
							<th>XPATH Name</th>
							<th>Data Index</th>
							<th>Data MOD</th>
							<th>Temp Table</th>
							<th>Column ID</th>
							<th>Column Name</th>
							<td colspan="3">Action</td>
						</tr>
					</thead>
					<tbody>
						@foreach($posts as $post)
						<tr>
							<td>{{ $post->seq }}</td>
							<td>{{ $post->xtrct_typ }}</td>
							<td>{{ $post->xtrct_xpath }}</td>
							<td>{{ $post->xtrct_nm }}</td>
							<td>{{ $post->data_idx }}</td>
							<td>{{ $post->data_mod }}</td>
							<td>{{ $post->tmp_tbl }}</td>
							<td>{{ $post->col_id }}</td>
							<td>{{ $post->col_nm }}</td>
							<td><a href="{{  route('wbcitminf.edit',['url_inf_seq' => $data->seq, 'seq' => $post->seq]) }}" class="btn btn-primary">Edit</a></td>
							<td>
								<form action="{{  route('wbcitminf.destroy',['url_inf_seq' => $data->seq, 'seq' => $post->seq]) }}" method="post">
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
