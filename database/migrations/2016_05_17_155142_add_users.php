<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \App\Models\User::create([
            'name' => 'user1',
            'password' => bcrypt('password'),
        ]);
        \App\Models\User::create([
            'name' => 'user2',
            'password' => bcrypt('password'),
        ]);
        \App\Models\User::create([
            'name' => 'user3',
            'password' => bcrypt('password'),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
