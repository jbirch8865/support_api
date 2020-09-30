<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class issue extends Model
{
    protected $table = 'issues';
    protected $fillable = ['title', 'creator', 'type', 'classification', 'status', 'notify', 'trello_id'];

    function Set_Creator(int $creator) : void
    {
        $this->creator = $creator;
    }

    function Set_Notify(bool $notify) : void
    {
        $this->notify = (int) $notify;
    }

    function Set_Title(string $title) : void
    {
        $this->title = $title;
    }

    function Set_Type(int $title) : void
    {
        $this->type = $title;
    }

    function Set_Classification(int $title) : void
    {
        $this->classification = $title;
    }

    function Set_Status(int $title) : void
    {
        $this->status = $title;
    }

    function Set_Trello_ID(string $trello_id) : void
    {
        $this->trello_id = $trello_id;
    }

    function Get_Title() : string
    {
        return $this->title;
    }

    function Get_Type() : int
    {
        return $this->type;
    }

    function Get_Classification() : int
    {
        return $this->classification;
    }

    function Get_Status() : int
    {
        return $this->status;
    }
    function Get_Creator() : int
    {
        return $this->creator;
    }

    function Get_Notify() : bool
    {
        return (bool) $this->notify;
    }

    function Get_Trello_ID() : string
    {
        return $this->trello_id;
    }
}
