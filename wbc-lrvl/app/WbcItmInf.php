<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WbcItmInf extends Model
{
    //
    protected $table = "wbc_itm_inf";   // �̰� ������ ������ s�� �ٿ��� �����´�.
    
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