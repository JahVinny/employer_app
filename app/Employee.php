<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = ['first_name','last_name','date_of_birth','home_address','cell_number','email_address',
        'tel_number','linkedin_link','facebook_link','job_title'];
}
