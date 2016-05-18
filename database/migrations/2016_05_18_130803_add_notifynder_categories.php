<?php

use Fenos\Notifynder\Models\NotificationCategory;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNotifynderCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        NotificationCategory::create([
            'name' => 'user.registered',
            'text' => 'Hello {to.name}, I\'m {from.name} and the new one here.',
        ]);
        NotificationCategory::create([
            'name' => 'user.welcome',
            'text' => 'Hello {to.name}, welcome in the Notifynder demo.',
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
