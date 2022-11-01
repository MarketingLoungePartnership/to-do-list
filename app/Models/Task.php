<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $primaryKey = 'task_id';

    protected $casts = [
        'is_complete' => 'boolean',
    ];

    protected $guarded = [];

    //Timestamps not needed as there is no time shown in the layout image
    public $timestamps = false;
}
