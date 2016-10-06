<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Esensi\Model\Model;

class Block extends Model
{
    protected $primaryKey='id';
    protected $table='Blocks';
    protected $fullable=array('title','content','topicid','imagePath','create_at','updated_at');
    protected $rules=['title'=>['required','max:100'],'content'=>['required'],'topicid'=>['required']];
}
