<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use CrudTrait;

    protected $guarded = ['id'];

    public function setCoverAttribute($value)
    {
        $this->uploadFileToDisk($value, 'cover', 'public', 'projects');
    }
}
