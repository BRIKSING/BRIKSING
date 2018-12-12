<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Services', function (Blueprint $table) {
        $table->increments('id_Services');
        $table->string('description');
        $table->timestamps();
      });
      Schema::create('Property_Types', function (Blueprint $table) {
        $table->increments('id_Property_Types');
        $table->string('descriptionType');
        $table->timestamps();
      });
      Schema::create('Objects', function (Blueprint $table) {
        $table->increments('id_Objects');
        $table->string('descriptionObject');
        $table->timestamps();
      });
      Schema::create('House_Types', function (Blueprint $table) {
        $table->increments('id_House_Types');
        $table->string('descriptionHouse');
        $table->timestamps();
      });
      Schema::create('Realtys', function (Blueprint $table) {
        $table->increments('id_Realtys');
        $table->integer('PropertyType_id')->unsigned()->index();
        $table->integer('Object_id')->unsigned()->index();
        $table->integer('HouseType_id')->unsigned()->index();
        $table->integer('numberOfRooms');
        $table->decimal('totalArea');
        $table->integer('floor');
        $table->integer('floors')->nullable();
        $table->decimal('price');
        $table->string('descript');
        $table->string('city');
        $table->string('numberHouse');
        $table->string('apartment');
        $table->integer('Client_id')->unsigned()->index();
        $table->string('status');
        $table->timestamps();
      });
      Schema::create('Clients', function (Blueprint $table) {
        $table->increments('id_Clients');
        $table->integer('user_id')->unsigned()->index();
        $table->string('firstName');
        $table->string('lastName');
        $table->string('patronomyc');
        $table->date('dateOfBirth');
        $table->string('telephone');
        $table->string('address');
        $table->timestamps();
      });
      Schema::create('Realtors', function (Blueprint $table) {
        $table->increments('id_Realtors');
        $table->integer('user_id')->unsigned()->index();
        $table->string('firstName');
        $table->string('lastName');
        $table->string('patronomyc');
        $table->string('telephone');
        $table->timestamps();
      });
      Schema::create('Deals', function (Blueprint $table) {
        $table->increments('id_Deals');
        $table->integer('Reality_id')->unsigned()->index();
        $table->integer('Realtor_id')->unsigned()->index();
        $table->integer('Services_id')->unsigned()->index();
        $table->date('dateOfDeal');
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Property_Types');
        Schema::dropIfExists('Objects');
        Schema::dropIfExists('Realtys');
        Schema::dropIfExists('Clients');
        Schema::dropIfExists('Realtors');
        Schema::dropIfExists('Deals');
        Schema::dropIfExists('Services');
        Schema::dropIfExists('House_Types');
    }
}
