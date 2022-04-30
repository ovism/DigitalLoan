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
       dd($this->attributes);
       $candidate = Candidate::create([
           'profession' => $this->attributes['profession'],
           'email' => $this->attributes['email'],

       ]);

        view('eligibilityForm/form');

    }

}
