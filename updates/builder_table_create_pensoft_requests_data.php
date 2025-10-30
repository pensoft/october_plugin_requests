<?php namespace Pensoft\Requests\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePensoftRequestsData extends Migration
{
    public function up()
    {
        Schema::create('pensoft_requests_data', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->text('title');
            $table->text('description')->nullable();
            $table->string('label')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('requester');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pensoft_requests_data');
    }
}
