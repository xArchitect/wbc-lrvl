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
				<li class="breadcrumb-item active">Edit</li>
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
                    	<h3 class="card-title">Custom Elements</h3>
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
							<input type="text" class="form-control" placeholder="Site" name="site" value="{{ $data->site }}">
							<span class="text-danger">{{ $errors->first('site') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Url</label>
						<div class="col-sm-10">
							<input type="text" class="form-control"  placeholder="Url" name="url" value="{{ $data->url }}">
							<span class="text-danger">{{ $errors->first('url') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Page Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Page Name" name="param_page_nm" value="{{ $data->param_page_nm }}">
							<span class="text-danger">{{ $errors->first('param_page_nm') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Start Page</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Start Page" name="start_page" value="{{ $data->start_page }}">
							<span class="text-danger">{{ $errors->first('start_page') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">End Page</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="End Page" name="end_page" value="{{ $data->end_page }}">
							<span class="text-danger">{{ $errors->first('end_page') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Table ID</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Table ID" name="tbl_id" value="{{ $data->tbl_id }}">
							<span class="text-danger">{{ $errors->first('tbl_id') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Table Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Table Name" name="tbl_nm" value="{{ $data->tbl_nm }}">
							<span class="text-danger">{{ $errors->first('tbl_nm') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">SQL Type</label>
						<div class="col-sm-10">
							<select class="form-control" class="form-control" name="slct_sql_typ">
								<option>SQL Type</option>
								<option value="SLCT_SQL_01" @if ($data->slct_sql_typ == 'SLCT_SQL_01') selected @endif>Type 01</option>
								<option value="SLCT_SQL_02" @if ($data->slct_sql_typ == 'SLCT_SQL_02') selected @endif>Type 02</option>
								<option value="SLCT_SQL_03" @if ($data->slct_sql_typ == 'SLCT_SQL_03') selected @endif>Type 03</option>
								<option value="SLCT_SQL_04" @if ($data->slct_sql_typ == 'SLCT_SQL_04') selected @endif>Type 04</option>
								<option value="SLCT_SQL_05" @if ($data->slct_sql_typ == 'SLCT_SQL_05') selected @endif>Type 05</option>
								<option value="SLCT_SQL_06" @if ($data->slct_sql_typ == 'SLCT_SQL_06') selected @endif>Type 06</option>
								<option value="SLCT_SQL_07" @if ($data->slct_sql_typ == 'SLCT_SQL_07') selected @endif>Type 07</option>
								<option value="SLCT_SQL_08" @if ($data->slct_sql_typ == 'SLCT_SQL_08') selected @endif>Type 08</option>
								<option value="SLCT_SQL_09" @if ($data->slct_sql_typ == 'SLCT_SQL_09') selected @endif>Type 09</option>
								<option value="SLCT_SQL_10" @if ($data->slct_sql_typ == 'SLCT_SQL_10') selected @endif>Type 10</option>
								<option value="SLCT_SQL_11" @if ($data->slct_sql_typ == 'SLCT_SQL_11') selected @endif>Type 11</option>
								<option value="SLCT_SQL_12" @if ($data->slct_sql_typ == 'SLCT_SQL_12') selected @endif>Type 12</option>
								<option value="SLCT_SQL_13" @if ($data->slct_sql_typ == 'SLCT_SQL_13') selected @endif>Type 13</option>
								<option value="SLCT_SQL_14" @if ($data->slct_sql_typ == 'SLCT_SQL_14') selected @endif>Type 14</option>
								<option value="SLCT_SQL_15" @if ($data->slct_sql_typ == 'SLCT_SQL_15') selected @endif>Type 15</option>
								<option value="SLCT_SQL_16" @if ($data->slct_sql_typ == 'SLCT_SQL_16') selected @endif>Type 16</option>
								<option value="SLCT_SQL_17" @if ($data->slct_sql_typ == 'SLCT_SQL_17') selected @endif>Type 17</option>
								<option value="SLCT_SQL_18" @if ($data->slct_sql_typ == 'SLCT_SQL_18') selected @endif>Type 18</option>
								<option value="SLCT_SQL_19" @if ($data->slct_sql_typ == 'SLCT_SQL_19') selected @endif>Type 19</option>
								<option value="SLCT_SQL_20" @if ($data->slct_sql_typ == 'SLCT_SQL_20') selected @endif>Type 20</option>
                        	</select>
                        	<span class="text-danger">{{ $errors->first('slct_sql_typ') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Use</label>
						<div class="col-sm-5">
							<div class="form-check">
								<input class="form-check-input" type="radio" id="radioUseY" value="Y" name="use_yn"  @if ($data->use_yn == 'Y') checked @endif>
								<label for="radioUseY" class="form-check-label">use</label>
        						<span class="text-danger">{{ $errors->first('use_yn') }}</span>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="form-check">
								<input class="form-check-input" type="radio" id="radioUseY" value="N" name="use_yn" @if ($data->use_yn == 'N') checked @endif>
								<label for="radioUseN" class="form-check-label">not use</label>
        						<span class="text-danger">{{ $errors->first('use_yn') }}</span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-offset-2 col-sm-12">
						<button type="submit" class="btn btn-info">Submit</button>
						<a href="{{ url('/wbcurlinf') }}" class="btn btn-default float-right">List</a>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop
