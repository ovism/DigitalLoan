<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->enum('profession', ['salaried','landLord']);
            $table->enum('residence', ['SelfOwnedHome','RentedHome', 'CompanyProvided']);
            $table->enum('loanType', ['personal','sme']);
            $table->string('dateOfBirth');
            $table->string('birthLocation');
            $table->string('email');
            $table->string('phone_number');
            $table->enum('gender', ['male','female', 'transgender']);
            $table->string('company_name');
//            $table->enum('company_type', ['male','female', 'transgender']);
            $table->enum('job_type', ['permanent','contractual', 'prodationary']);
            //            $table->enum('job_experience', ['male','female', 'transgender']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
};
