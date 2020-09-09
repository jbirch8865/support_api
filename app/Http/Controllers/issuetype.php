<?php

namespace App\Http\Controllers;

use App\issuetype as AppIssuetype;
use Illuminate\Http\Request;

class issuetype extends Controller
{
    public function getIssueTypes(Request $request)
    {
        $issuetype = new AppIssuetype();
        return response()->json([
            "payload" => [
                "message" => "List of Issue Types",
                "data" => $issuetype->getAllIssueTypes($request->input('allTypes') ? true : false)
            ],
            "response" => ["message" => "None", "data" => ""],
        ], 200);
    }
}
