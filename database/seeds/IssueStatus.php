<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IssueStatus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('issuestatuses')->where('name', '=', "Pending IT")->delete();
        DB::table('issuestatuses')->where('name', '=', "Pending User")->delete();
        DB::table('issuestatuses')->where('name', '=', "On Deck")->delete();
        DB::table('issuestatuses')->where('name', '=', "In Progress")->delete();
        DB::table('issuestatuses')->where('name', '=', "Pending Testing")->delete();
        DB::table('issuestatuses')->where('name', '=', "Pending Deployment")->delete();
        DB::table('issuestatuses')->where('name', '=', "Closed")->delete();

        DB::table('issuestatuses')->insert([
            'id' => 1,
            'name' => "Pending IT"
        ]);
        DB::table('issuestatuses')->insert([
            'id' => 2,
            'name' => "Pending User"
        ]);
        DB::table('issuestatuses')->insert([
            'id' => 3,
            'name' => "On Deck"
        ]);
        DB::table('issuestatuses')->insert([
            'id' => 4,
            'name' => "In Progress"
        ]);
        DB::table('issuestatuses')->insert([
            'id' => 5,
            'name' => "Pending Testing"
        ]);
        DB::table('issuestatuses')->insert([
            'id' => 6,
            'name' => "Pending Deployment"
        ]);
        DB::table('issuestatuses')->insert([
            'id' => 7,
            'name' => "Closed"
        ]);
    }
}
