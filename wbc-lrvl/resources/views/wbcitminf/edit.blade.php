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
				<li class="breadcrumb-item active">Edit</li>
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
							<input type="text" class="form-control" placeholder="Site" name="site" value="{{ $wbcUrlInfData->site }}" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Url</label>
						<div class="col-sm-10">
							<input type="text" class="form-control"  placeholder="Url" name="url" value="{{ $wbcUrlInfData->url }}" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Page Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Page Name" name="param_page_nm" value="{{ $wbcUrlInfData->param_page_nm }}" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Start Page</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Start Page" name="start_page" value="{{ $wbcUrlInfData->start_page }}" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">End Page</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="End Page" name="end_page" value="{{ $wbcUrlInfData->end_page }}" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Table ID</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Table ID" name="tbl_id" value="{{ $wbcUrlInfData->tbl_id }}" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Table Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Table Name" name="tbl_nm" value="{{ $wbcUrlInfData->tbl_nm }}" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">SQL Type</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="SQL Type" name="sql_type" value="{{ $wbcUrlInfData->slct_sql_typ }}" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Use</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Use" name="use_yn" value="{{ $wbcUrlInfData->use_yn }}" readonly>
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
				<form action="{{ route('wbcitminf.update') }} " method="POST">
				<input type="text" class="form-control" name="url_inf_seq" value="{{ $wbcUrlInfData->seq }}">
				<input type="text" class="form-control" name="seq" value="{{ $data->seq }}">
					@csrf
				<div class="card-body">
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Extract Type</label>
						<div class="col-sm-10">
							<select class="form-control" class="form-control" name="xtrct_typ">
								<option>Extract Type</option>
								<option value="XTRCT_TYP_01" @if ($data->xtrct_typ == 'XTRCT_TYP_01') selected @endif>Type 01</option>
								<option value="XTRCT_TYP_02" @if ($data->xtrct_typ == 'XTRCT_TYP_02') selected @endif>Type 02</option>
								<option value="XTRCT_TYP_03" @if ($data->xtrct_typ == 'XTRCT_TYP_03') selected @endif>Type 03</option>
								<option value="XTRCT_TYP_04" @if ($data->xtrct_typ == 'XTRCT_TYP_04') selected @endif>Type 04</option>
                        	</select>
                        	<span class="text-danger">{{ $errors->first('xtrct_typ') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">XPATH</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="XPATH Expression" name="xtrct_xpath" value="{{ $data->xtrct_xpath }}">
							<span class="text-danger">{{ $errors->first('xtrct_xpath') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">XPATH Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control"  placeholder="XPATH Name" name="xtrct_nm" value="{{ $data->xtrct_xpath }}">
							<span class="text-danger">{{ $errors->first('xtrct_nm') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Data Index</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Data Index" name="data_idx" value="{{ $data->data_idx }}">
							<span class="text-danger">{{ $errors->first('data_idx') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Data MOD</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Data MOD" name="data_mod" value="{{ $data->data_mod }}">
							<span class="text-danger">{{ $errors->first('data_mod') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Temp Table</label>
						<div class="col-sm-10">
							<select class="form-control" class="form-control" name="tmp_tbl">
								<option>Temp Table</option>
								<option value="01" @if ($data->tmp_tbl == '01') selected @endif>Temp Table 01</option>
								<option value="02" @if ($data->tmp_tbl == '02') selected @endif>Temp Table 02</option>
								<option value="03" @if ($data->tmp_tbl == '03') selected @endif>Temp Table 03</option>
								<option value="04" @if ($data->tmp_tbl == '04') selected @endif>Temp Table 04</option>
								<option value="05" @if ($data->tmp_tbl == '05') selected @endif>Temp Table 05</option>
								<option value="06" @if ($data->tmp_tbl == '06') selected @endif>Temp Table 06</option>
								<option value="07" @if ($data->tmp_tbl == '07') selected @endif>Temp Table 07</option>
								<option value="08" @if ($data->tmp_tbl == '08') selected @endif>Temp Table 08</option>
								<option value="09" @if ($data->tmp_tbl == '09') selected @endif>Temp Table 09</option>
								<option value="10" @if ($data->tmp_tbl == '10') selected @endif>Temp Table 10</option>
								<option value="11" @if ($data->tmp_tbl == '11') selected @endif>Temp Table 11</option>
								<option value="12" @if ($data->tmp_tbl == '12') selected @endif>Temp Table 12</option>
								<option value="13" @if ($data->tmp_tbl == '13') selected @endif>Temp Table 13</option>
								<option value="14" @if ($data->tmp_tbl == '14') selected @endif>Temp Table 14</option>
								<option value="15" @if ($data->tmp_tbl == '15') selected @endif>Temp Table 15</option>
								<option value="16" @if ($data->tmp_tbl == '16') selected @endif>Temp Table 16</option>
								<option value="17" @if ($data->tmp_tbl == '17') selected @endif>Temp Table 17</option>
								<option value="18" @if ($data->tmp_tbl == '18') selected @endif>Temp Table 18</option>
								<option value="19" @if ($data->tmp_tbl == '19') selected @endif>Temp Table 19</option>
								<option value="20" @if ($data->tmp_tbl == '20') selected @endif>Temp Table 20</option>
                        	</select>
							<span class="text-danger">{{ $errors->first('tmp_tbl') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Column ID</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Column ID" name="col_id" value="{{ $data->col_id }}">
							<span class="text-danger">{{ $errors->first('col_id') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Column Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Column Name" name="col_nm" value="{{ $data->col_nm }}">
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
