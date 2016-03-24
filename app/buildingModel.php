<?php

namespace City_Corporation_Automation;

use Illuminate\Database\Eloquent\Model;

class buildingModel extends Model
{
    
    protected $table="buildingApply";
    protected $primaryKey="apply_id";

    protected $fillable=[
        'name',
        'father_name',
        'mother_name',
        'nationality',
        'nationalId',
        'phoneNo',
        'email',
        'location',
        'area',
        'floorAmount',
        'status'
    ];
}
