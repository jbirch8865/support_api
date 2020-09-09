<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class issue extends Model
{
    protected $table = 'issues';
    protected $fillable = ['title', 'creator', 'type', 'classification', 'status', 'notify'];

    function Set_Creator(int $creator)
    {
        $this->creator = $creator;
    }

    function Set_Notify(bool $notify)
    {
        $this->notify = $notify;
    }

    function Set_Title(string $title)
    {
        $this->title = $title;
    }

    function Set_Type(int $title)
    {
        $this->type = $title;
    }

    function Set_Classification(int $title)
    {
        $this->classification = $title;
    }

    function Set_Status(int $title)
    {
        $this->status = $title;
    }

    function Get_Title()
    {
        return $this->title;
    }

    function Get_Type()
    {
        return $this->type;
    }

    function Get_Classification()
    {
        return $this->classification;
    }

    function Get_Status()
    {
        return $this->status;
    }
    function Get_Creator()
    {
        return $this->creator;
    }

    function Get_Notify()
    {
        return $this->notify;
    }
}
