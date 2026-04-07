<?php namespace Pensoft\Requests\Updates;

use Illuminate\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePensoftRequestsProfilesPivot extends Migration
{
    public function up(): void
    {
        Schema::create('pensoft_requests_profiles_pivot', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('request_id');
            $table->integer('profile_id');
            $table->integer('sort_order')->nullable()->default(1);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pensoft_requests_profiles_pivot');
    }
}