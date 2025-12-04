<?php namespace Pensoft\Requests\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftRequestsData extends Migration
{
    public function up()
    {
        Schema::table('pensoft_requests_data', function($table)
        {
            $table->integer('sort_order')->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_requests_data', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
