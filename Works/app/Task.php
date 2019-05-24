<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function user()
    {
        return $this->hasOne( User::class);
    }

    public function users()
    {
        return $this->belongsToMany( User::class);
    }

    public function professor()
    {
        return $this->belongsTo(User::class);
    }
}
