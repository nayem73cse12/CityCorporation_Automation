<?php

namespace City_Corporation_Automation;

use Illuminate\Database\Eloquent\Model;

class noticeModel extends Model
{
    
    protected $table="notice";
    protected $primaryKey="tender_id";

    protected $fillable=[
         'tender_title',
        'tender_category',
        'tender_createdDate',
        'tender_lastIssueDate',
        'tender_description'
    ];
}
