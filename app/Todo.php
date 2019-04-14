<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Todo extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'content' => 'required'
    );

    public function getDetail() {
        return $this->name.'('.$this->content.')';
    }
}
