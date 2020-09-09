<?php

namespace App\Http\Controllers;

use App\issue as AppIssue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class issue extends Controller
{
    public function searchIssues(Request $request)
    {
        $issues = DB::table('issues')
            ->join('issuetypes', 'issuetypes.id', '=', 'issues.type')
            ->join('issuestatuses', 'issuestatuses.id', '=', 'issues.status')
            ->select(['issues.id', 'issues.title', 'issues.classification', 'issues.notify', 'issues.created_at', 'issuetypes.name as type', 'issuestatuses.name as status']);
        if ($request->input('globalSearch')) {
            $issues->where('classification', 2);
        } else {
            $issues->where('creator', $request->header('Authorization'));
        }
        return response()->json([
            "payload" => ["message" => "tickets", "data" => $issues->get()],
            "response" => ["message" => ""]
        ], 200);
    }
    public function getIssue()
    {
    }
    public function createIssue(Request $request)
    {
        $issue = new AppIssue();
        $issue->Set_Creator($request->header('Authorization'));
        $issue->Set_Title($request->title);
        $issue->Set_Type($request->type);
        $issue->Set_Classification(1);
        $issue->Set_Status(1);
        $issue->Set_Notify(false);
        $issue->save();
        return response()->json([
            "payload" => ["message" => "issue has been reported", "data" => ""],
            "response" => ["message" => "Thank you, your request has been received."]
        ], 201);
    }
    public function updateIssue()
    {
    }
    public function deleteIssue()
    {
    }
}
