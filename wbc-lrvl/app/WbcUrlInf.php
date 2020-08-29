<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WbcUrlInf extends Model
{
    protected $table = "wbc_url_inf";   // �̰� ������ ������ s�� �ٿ��� �����´�.
    
    protected $fillable = [
        'site'
        ,'url'
        ,'param_page_nm'
        ,'start_page'
        ,'end_page'
        ,'tbl_id'
        ,'tbl_nm'
        ,'slct_sql_typ'
        ,'use_yn'
    ];  // request�� ������ ���
}
