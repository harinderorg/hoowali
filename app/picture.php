<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class picture extends Model
{
  use SoftDeletes;    
  protected $table ='picture';
}
