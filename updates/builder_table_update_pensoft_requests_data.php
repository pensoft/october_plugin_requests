<?php namespace Pensoft\Requests\Updates;

use Illuminate\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftRequestsData extends Migration
{
    public function up(): void
    {
        Schema::table('pensoft_requests_data', function(Blueprint $table)
        {
            $table->integer('sort_order')->default(1);
        });
    }

    public function down(): void
    {
        Schema::table('pensoft_requests_data', function(Blueprint $table)
        {
            $table->dropColumn('sort_order');
        });
    }
}