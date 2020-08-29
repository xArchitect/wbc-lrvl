<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WbcUrlInf extends Model
{
    protected $table = "wbc_url_inf";   // 이걸 붙이지 않으면 s를 붙여서 가져온다.
    
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
    ];  // request로 전달한 대상
}
