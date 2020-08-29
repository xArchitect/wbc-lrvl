<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WbcItmInf extends Model
{
    //
    protected $table = "wbc_itm_inf";   // 이걸 붙이지 않으면 s를 붙여서 가져온다.
    
    protected $fillable = [
        'url_inf_seq'
        ,'xtrct_typ'
        ,'xtrct_xpath'
        ,'xtrct_nm'
        ,'data_idx'
        ,'data_mod'
        ,'tmp_tbl'
        ,'col_id'
        ,'col_nm'
    ];
}