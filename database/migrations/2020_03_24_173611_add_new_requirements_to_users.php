<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewRequirementsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('dob', 10)->nullable()->after('user_type');
            $table->string('mobile', 15)->nullable()->after('dob');
            $table->string('photo', 100)->nullable()->after('mobile');

            $table->string('perm_add_house', 100)->nullable()->after('photo');
            $table->string('perm_add_road', 100)->nullable()->after('perm_add_house');
            $table->string('perm_add_ward', 100)->nullable()->after('perm_add_road');
            $table->string('perm_add_para', 100)->nullable()->after('perm_add_ward');
            $table->string('perm_add_district_city', 100)->nullable()->after('perm_add_para');

            $table->string('pres_add_house', 100)->nullable()->after('perm_add_district_city');
            $table->string('pres_add_road', 100)->nullable()->after('pres_add_house');
            $table->string('pres_add_ward', 100)->nullable()->after('pres_add_road');
            $table->string('pres_add_para', 100)->nullable()->after('pres_add_ward');
            $table->string('pres_add_district_city', 100)->nullable()->after('pres_add_para');

            $table->string('geo_location', 100)->nullable()->after('pres_add_district_city');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn('dob');
            $table->dropColumn('mobile');
            $table->dropColumn('photo');

            $table->dropColumn('perm_add_house');
            $table->dropColumn('perm_add_road');
            $table->dropColumn('perm_add_ward');
            $table->dropColumn('perm_add_para');
            $table->dropColumn('perm_add_district_city');

            $table->dropColumn('pres_add_house');
            $table->dropColumn('pres_add_road');
            $table->dropColumn('pres_add_ward');
            $table->dropColumn('pres_add_para');
            $table->dropColumn('pres_add_district_city');

            $table->dropColumn('geo_location');

        });
    }
}
