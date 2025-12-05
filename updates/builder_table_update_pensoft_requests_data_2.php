<?php namespace Pensoft\Requests\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftRequestsData2 extends Migration
{
    public function up()
    {
        Schema::table('pensoft_requests_data', function($table)
        {
            $table->string('status')->nullable();
            $table->text('experts')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_requests_data', function($table)
        {
            $table->dropColumn('status');
            $table->dropColumn('experts');
        });
    }
}
