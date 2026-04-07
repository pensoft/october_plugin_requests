<?php namespace Pensoft\Requests\Updates;

use Illuminate\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftRequestsData2 extends Migration
{
    public function up(): void
    {
        Schema::table('pensoft_requests_data', function(Blueprint $table)
        {
            $table->string('status')->nullable();
            $table->text('experts')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('pensoft_requests_data', function(Blueprint $table)
        {
            $table->dropColumn('status');
            $table->dropColumn('experts');
        });
    }
}