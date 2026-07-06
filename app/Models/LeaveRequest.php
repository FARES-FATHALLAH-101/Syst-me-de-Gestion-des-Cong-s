<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeaveRequest extends Model
{
    protected $table = "leave_requests";
    protected $fillable = [ 'leave_type','start_date','end_date','reason','status','user_id'];

}
