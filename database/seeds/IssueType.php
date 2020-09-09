<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IssueType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('issuetypes')->where('name', '=', "Something was working but now is not")->delete();
        DB::table('issuetypes')->where('name', '=', "Pretty sure this isn't working the way it should.")->delete();
        DB::table('issuetypes')->where('name', '=', "How the heck am I supposed to ...")->delete();
        DB::table('issuetypes')->where('name', '=', "Man, it sure would be cool if ...")->delete();
        DB::table('issuetypes')->where('name', '=', "bug")->delete();
        DB::table('issuetypes')->where('name', '=', "enhancement")->delete();
        DB::table('issuetypes')->where('name', '=', "feature")->delete();


        DB::table('issuetypes')->insert([
            'id' => 1,
            'name' => "Something was working but now is not",
            'visible' => true
        ]);
        DB::table('issuetypes')->insert([
            'id' => 2,
            'name' => "Pretty sure this isn't working the way it should.",
            'visible' => true
        ]);
        DB::table('issuetypes')->insert([
            'id' => 3,
            'name' => "How the heck am I supposed to ...",
            'visible' => true
        ]);
        DB::table('issuetypes')->insert([
            'id' => 4,
            'name' => "Man, it sure would be cool if ...",
            'visible' => true
        ]);
        DB::table('issuetypes')->insert([
            'id' => 5,
            'name' => "bug",
            'visible' => false
        ]);
        DB::table('issuetypes')->insert([
            'id' => 6,
            'name' => "enhancement",
            'visible' => false
        ]);
        DB::table('issuetypes')->insert([
            'id' => 7,
            'name' => "feature",
            'visible' => false
        ]);
    }
}
