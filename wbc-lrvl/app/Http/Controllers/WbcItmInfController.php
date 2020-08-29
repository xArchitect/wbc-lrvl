<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WbcItmInf;
use App\WbcUrlInf;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class WbcItmInfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Log::debug('WbcItmInfController');
        
        app('debugbar')->info('here we stoarre');
        
        // seq를 입력받아서 weburlinf정보를 가져온다
        $wbcUrlInfData = WbcUrlInf::where('seq', $request->seq)->first();
        // Load user/createOrUpdate.blade.php view
        
        // urlinfseq에 해당하는 webitminf목록을 가져온다.
        $data['posts'] = WbcItmInf::where('url_inf_seq', $request->seq)->orderBy('seq', 'asc')->paginate(10);
        return view('wbcitminf.index',$data)->with('data', $wbcUrlInfData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // seq를 입력받아서 weburlinf정보를 가져온다
        $wbcUrlInfData = WbcUrlInf::where('seq', $request->url_inf_seq)->first();
        
        return view('wbcitminf.create')->with('data', $wbcUrlInfData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'xtrct_typ' => 'required',
            'xtrct_xpath' => 'required',
            'tmp_tbl' => 'required',
            'col_id' => 'required',
            'col_nm' => 'required',
        ];
        
        $messages = [
            'xtrct_typ.required' => 'Extract Type is required.',
            'xtrct_xpath.required' => 'XPath Expression is required.',
            'tmp_tbl.required' => 'Temp Table is required.',
            'col_id.required' => 'Column ID is required.',
            'col_nm.required' => 'Column Name is required.',
        ];
        
        $this->validate($request, $rules, $messages);
        
        $wbcitminf = new WbcItmInf([
            'url_inf_seq' => $request->get('url_inf_seq'),
            'xtrct_typ' => $request->get('xtrct_typ'),
            'xtrct_xpath' => $request->get('xtrct_xpath'),
            'xtrct_nm' => $request->get('xtrct_nm'),
            'data_idx' => $request->get('data_idx'),
            'data_mod' => $request->get('data_mod'),
            'tmp_tbl' => $request->get('tmp_tbl'),
            'col_id' => $request->get('col_id'),
            'col_nm' => $request->get('col_nm'),
            'xtrct_xpath' => $request->get('xtrct_xpath'),
        ]);
        $wbcitminf->save();
        
        return redirect()->route('wbcitminf.index',['seq' => $request->get('url_inf_seq')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        // seq를 입력받아서 weburlinf정보를 가져온다
        $wbcUrlInfData = WbcUrlInf::where('seq', $request->url_inf_seq)->first();
        $data = WbcItmInf::where('seq', $request->seq)->first();
        
        return view('wbcitminf.edit')->with('wbcUrlInfData', $wbcUrlInfData)->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $rules = [
            'xtrct_typ' => 'required',
            'xtrct_xpath' => 'required',
            'tmp_tbl' => 'required',
            'col_id' => 'required',
            'col_nm' => 'required',
        ];
        
        $messages = [
            'xtrct_typ.required' => 'Extract Type is required.',
            'xtrct_xpath.required' => 'XPath Expression is required.',
            'tmp_tbl.required' => 'Temp Table is required.',
            'col_id.required' => 'Column ID is required.',
            'col_nm.required' => 'Column Name is required.',
        ];
        
        $this->validate($request, $rules, $messages);
        
        $data = request()->except('_token','_method');
        
        //         if(!$request->id){
        //             return redirect('/list');
        //         }
        Log::debug('WbcItmInfController');
        $check = WbcItmInf::where('seq', $request->seq)->update($data);
        return redirect()->route('wbcitminf.index',['seq' => $request->get('url_inf_seq')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $check = WbcItmInf::where('seq', $request->seq)->delete();
        
        return redirect()->route('wbcitminf.index',['seq' => $request->get('url_inf_seq')]);
    }
}
