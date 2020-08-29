@extends('adminlte::page')

@section('title', 'Item Info')

@section('content_header')
<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1>URL Info</h1>
		</div>
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item">Setting</li>
				<li class="breadcrumb-item">Item Info</li>
				<li class="breadcrumb-item active">Create</li>
			</ol>
		</div>
	</div>
</div>
<!-- /.container-fluid --> 
@stop @section('content')
<div class="row">
	<div class="col-12">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-secondary">
    				<div class="card-header">
                    	<h3 class="card-title">URL Info</h3>
                  	</div>
				</div>
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
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-secondary">
    				<div class="card-header">
                    	<h3 class="card-title">Item Info</h3>
                  	</div>
				</div>
				<form action="{{ route('wbcitminf.store') }} " method="POST">
				<input type="hidden" class="form-control" name="url_inf_seq" value="{{ $data->seq }}">
					@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Extract Type</label>
						<div class="col-sm-10">
							<select class="form-control" class="form-control" name="xtrct_typ">
								<option>Extract Type</option>
								<option value="XTRCT_TYP_01">Type 01</option>
								<option value="SLCT_SQL_02">Type 02</option>
								<option value="SLCT_SQL_03">Type 03</option>
								<option value="SLCT_SQL_04">Type 04</option>
								<option value="SLCT_SQL_05">Type 05</option>
                        	</select>
                        	<span class="text-danger">{{ $errors->first('xtrct_typ') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">XPATH</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="XPATH Expression" name="xtrct_xpath">
							<span class="text-danger">{{ $errors->first('xtrct_xpath') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">XPATH Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control"  placeholder="XPATH Name" name="xtrct_nm">
							<span class="text-danger">{{ $errors->first('xtrct_nm') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Data Index</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Data Index" name="data_idx">
							<span class="text-danger">{{ $errors->first('data_idx') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Data MOD</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Data MOD" name="data_mod">
							<span class="text-danger">{{ $errors->first('data_mod') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Temp Table</label>
						<div class="col-sm-10">
							<select class="form-control" class="form-control" name="tmp_tbl">
								<option>Temp Table</option>
								<option value="01">Temp Table 01</option>
								<option value="02">Temp Table 02</option>
								<option value="03">Temp Table 03</option>
								<option value="04">Temp Table 04</option>
								<option value="05">Temp Table 05</option>
								<option value="06">Temp Table 06</option>
								<option value="07">Temp Table 07</option>
								<option value="08">Temp Table 08</option>
								<option value="09">Temp Table 09</option>
								<option value="10">Temp Table 10</option>
								<option value="11">Temp Table 11</option>
								<option value="12">Temp Table 12</option>
								<option value="13">Temp Table 13</option>
								<option value="14">Temp Table 14</option>
								<option value="15">Temp Table 15</option>
								<option value="16">Temp Table 16</option>
								<option value="17">Temp Table 17</option>
								<option value="18">Temp Table 18</option>
								<option value="19">Temp Table 19</option>
								<option value="20">Temp Table 20</option>
                        	</select>
							<span class="text-danger">{{ $errors->first('tmp_tbl') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Column ID</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Column ID" name="col_id">
							<span class="text-danger">{{ $errors->first('col_id') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Column Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Table Name" name="col_nm">
							<span class="text-danger">{{ $errors->first('tbl_nm') }}</span>
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
