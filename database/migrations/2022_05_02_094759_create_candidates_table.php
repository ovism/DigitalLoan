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
            $table->timestamps();
            $table->enum('profession', ['salaried','landLord']);
            $table->enum('residence', ['SelfOwnedHome','RentedHome', 'CompanyProvided']);
            $table->enum('loanType', ['personal','sme']);
            $table->string('dateOfBirth');
            $table->enum('birthLocation', ['dhaka','chattogram', 'khulna' , 'rajshahi' , 'sylhet' , 'barishal' ,'rangpur' , 'mymensing']);
            $table->string('email');
            $table->string('phone_number');
            $table->enum('gender', ['male','female', 'transgender']);
//            $table->enum('company_type' , ['School & College' , 'National University' , 'Cadet College' ,''  ]);
            $table->enum('job_experience', ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30']);
            $table->enum('job_type', ['permanent','contractual', 'prodationary']);
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
