<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Esensi\Model\Model;

class Topic extends Model
{
    protected $primaryKey='id';
    protected $table='Topics';
    protected $fullable=array('topicname','create_at','updated_at');
    protected $rules=['topicname'=>['required','max:100','unique']];
}
