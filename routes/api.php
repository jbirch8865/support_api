<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('issues', 'issue@searchIssues');
Route::get('issues/{id}', 'issue@getIssue');
Route::post('issues', 'issue@createIssue');
Route::put('issues/{id}', 'issue@updateIssue');
Route::delete('issues/{id}', 'issue@deleteIssue');
Route::get('issuetypes', 'issuetype@getIssueTypes');
Route::post('webhook', 'webhook@handleWebhook');
Route::get('webhook', 'webhook@handleWebhook');