<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
   {
       Schema::create('contacts', function (Blueprint $table) {
           $table->unsignedBigInteger('id');
           $table->string('name', 255);
           $table->string('email', 255);
           $table->string('tell', 11);
           $table->text('content');
           $table->timestamp('created_at') ->useCurrent(); //作成時刻
           $table->timestamp('updated_at')->useCurrent()->nullable(); //更新時刻
       });
   }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
