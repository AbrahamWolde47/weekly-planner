<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table= 'plans';

    protected $fillable=[ 'projects', 'training', 'Challenges', 'personal_projects'];


}
