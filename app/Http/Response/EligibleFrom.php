<?php

namespace App\Http\Response;

use App\Models\Candidate;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\View\View;

class EligibleFrom implements Responsable
{
    /**
     * @var array
     */
    private $attributes;

    public function __construct(array $data)
    {
        $this->attributes = $data;

    }

    public  function toResponse($request)
    {
       $candidate = Candidate::create([
           'profession' => $this->attributes['profession'],
           'residence' => $this->attributes['residence'],
           'loanType' => 'personal',
           'dateOfBirth' => $this->attributes['dateOfBirth'],
           'birthLocation' => $this->attributes['birthLocation'],
           'email' => $this->attributes['email'],
           'phone_number' => $this->attributes['phone_number'],
           'gender' => $this->attributes['gender'],
//           'company_type' => $this->attributes['company_type'],
//           'company_type' => $this->attributes['company_type'],
//           'job_type' => $this->attributes['job_type'],
//           'job_experience' => $this->attributes['job_experience'],


       ]);
        $loanAmount =null;
        $salary = $this->attributes['actualSalary'];
        $loanAmount =floatval( $salary )* 15;
        $residenceType = $this->attributes['residence'];
        $jobType = $this->attributes['job_type'];

        if ($residenceType == 'SelfOwnedHome') {
            $loanAmount = $loanAmount * 0.95;

        }
        elseif ($residenceType == 'CompanyProvided') {
            $loanAmount = $loanAmount * 0.9;

        }
       else
        {
            $loanAmount = $loanAmount * 0.85;

        }


        if ($jobType == 'contractual')
        {
            $loanAmount = $loanAmount * 0.7;


        }

        if ($loanAmount > 1000000)
        {
            $loanAmount = 1000000;

        }


        $interestRate = 10.5;
        $tenure = 5;
        $noOfMonths = $tenure*12;
        $monthlyRate = (float) ($interestRate/(12*100));
        $onePlusR = pow(1+$monthlyRate,$noOfMonths);
        $denominator = $onePlusR-1;
        $emi= round(($loanAmount*$monthlyRate*($onePlusR/$denominator)), 2);

       return view('result', compact('emi', 'interestRate', 'loanAmount'));

    }

}
