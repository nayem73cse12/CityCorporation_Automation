<?php

namespace City_Corporation_Automation;

use Illuminate\Database\Eloquent\Model;

class applyModel extends Model
{
    protected $table="tenderApply";
    protected $primaryKey="apply_id";

    protected $fillable=[
         'tender_id',
        'company_name',
        'contact_no',
        'contact_address',
        'experience',
        'eligibility'
    ];
}
