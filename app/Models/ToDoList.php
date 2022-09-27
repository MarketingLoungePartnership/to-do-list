<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    use HasFactory;

    protected $table = 'todolists';
    protected $fillable = ['description', 'status'];    


    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }



    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }



    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
