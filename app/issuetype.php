<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class issuetype extends Model
{
    protected $table = 'issuetypes';
    protected $fillable = ['name'];

    function getAllIssueTypes(bool $allTypes)
    {
        if ($allTypes) {
            $results = $this->all();
        } else {
            $results = $this->where('visible', true)->get();
        }
        return $results;
    }
}
