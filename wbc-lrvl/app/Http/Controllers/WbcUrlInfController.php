<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WbcUrlInf;
use Illuminate\Support\Facades\Redirect;

class WbcUrlInfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['posts'] = WbcUrlInf::orderBy('seq','desc')->paginate(10);
        return view('wbcurlinf.index', $data);
//         return view('wbcurlinf.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
//         Debugbar::warning('Watch out¡¦');
//         app('debugbar')->info('here we are');
        return view('wbcurlinf.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
//         app('debugbar')->info('here we store');
        $rules = [
            'site' => 'required',
            'url' => 'required',
            'param_page_nm' => 'required',
            'start_page' => 'required',
            'end_page' => 'required',
            'tbl_id' => 'required',
            'tbl_nm' => 'required',
            'slct_sql_typ' => 'required|
                                in:SLCT_SQL_01,SLCT_SQL_02,SLCT_SQL_03,SLCT_SQL_04,SLCT_SQL_05
                                ,SLCT_SQL_06,SLCT_SQL_07,SLCT_SQL_08,SLCT_SQL_09,SLCT_SQL_10,
                                ,SLCT_SQL_11,SLCT_SQL_12,SLCT_SQL_13,SLCT_SQL_14,SLCT_SQL_15,
                                ,SLCT_SQL_16,SLCT_SQL_17,SLCT_SQL_18,SLCT_SQL_19,SLCT_SQL_20',
            'use_yn' => 'required',
        ];
        
        $messages = [
            'site.required' => 'Site is required.',
            'url.required' => 'URL is required.',
            'param_page_nm.required' => 'Page Name is required.',
            'start_page.required' => 'Start Page is required.',
            'end_page.required' => 'End Page is required.',
            'tbl_id.required' => 'Table ID is required.',
            'tbl_nm.required' => 'Table Name is required.',
            'slct_sql_typ.required' => 'SQL Type is required.',
            'use_yn.required' => 'Use is required.',
        ];

        $this->validate($request, $rules, $messages);
        
        $wbcurlinf = new WbcUrlInf([
            'site' => $request->get('site'),
            'url' => $request->get('url'),
            'param_page_nm' => $request->get('param_page_nm'),
            'start_page' => $request->get('start_page'),
            'end_page' => $request->get('end_page'),
            'tbl_id' => $request->get('tbl_id'),
            'tbl_nm' => $request->get('tbl_nm'),
            'slct_sql_typ' => $request->get('slct_sql_typ'),
            'use_yn' => $request->get('use_yn'),
        ]);
        $wbcurlinf->save();
        
//         $data = request()->validate([
//             'site' => 'required',
//             'url' => 'required',
//             'param_page_nm' => 'required',
//             'start_page' => 'required',
//             'end_page' => 'required',
//             'tbl_id' => 'required',
//             'tbl_nm' => 'required',
//             'slct_sql_typ' => 'required',
//             'use_yn' => 'required',
//         ]);
        
//         $check = WbcUrlInf::insert($data);
        
//         $check = WbcUrlInf::insert($data);
        return Redirect::to("/wbcurlinf")->withSuccess('Great! Form successfully submit with validation.');
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
    public function edit($id)
    {
        //
//         $data['post'] = WbcUrlInf::where('seq', $id)->first();
        
//         if(!$data['post']){
//             return redirect('/wbcurlinf');
//         }
//         return view('edit', $data);
        $data = WbcUrlInf::where('seq', $id)->first();
        // Load user/createOrUpdate.blade.php view
        return view('wbcurlinf.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $rules = [
            'site' => 'required',
            'url' => 'required',
            'param_page_nm' => 'required',
            'start_page' => 'required',
            'end_page' => 'required',
            'tbl_id' => 'required',
            'tbl_nm' => 'required',
            'slct_sql_typ' => 'required|
                                in:SLCT_SQL_01,SLCT_SQL_02,SLCT_SQL_03,SLCT_SQL_04,SLCT_SQL_05
                                ,SLCT_SQL_06,SLCT_SQL_07,SLCT_SQL_08,SLCT_SQL_09,SLCT_SQL_10,
                                ,SLCT_SQL_11,SLCT_SQL_12,SLCT_SQL_13,SLCT_SQL_14,SLCT_SQL_15,
                                ,SLCT_SQL_16,SLCT_SQL_17,SLCT_SQL_18,SLCT_SQL_19,SLCT_SQL_20',
            'use_yn' => 'required',
        ];
        
        $messages = [
            'site.required' => 'Site is required.',
            'url.required' => 'URL is required.',
            'param_page_nm.required' => 'Page Name is required.',
            'start_page.required' => 'Start Page is required.',
            'end_page.required' => 'End Page is required.',
            'tbl_id.required' => 'Table ID is required.',
            'tbl_nm.required' => 'Table Name is required.',
            'slct_sql_typ.required' => 'SQL Type is required.',
            'use_yn.required' => 'Use is required.',
        ];
        
        $this->validate($request, $rules, $messages);
        
        $data = request()->except('_token','_method');
        
//         if(!$request->id){
//             return redirect('/list');
//         }
        
        $check = WbcUrlInf::where('seq', $id)->update($data);
        return Redirect::to("/wbcurlinf")->withSuccess('Great! Form successfully update with validation.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        app('debugbar')->info('here we store');
//         if(!$id){
//             return redirect('/wbcurlinf');
//         }
        
        $check = WbcUrlInf::where('seq', $id)->delete();
        
        return Redirect::to("/wbcurlinf")->withSuccess('Great! Form successfully submit with validation.');
    }
}
