<?php

namespace App\Http\Response;

use App\Models\Applicant;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\UploadedFile;

class LoanForm implements  Responsable
{

    /**
     * @var array
     */
    private $attributes;
    /**
     * @var UploadedFile|null
     */
    private $file;

    public function __construct(array $attributes, UploadedFile $file = null)
    {
        $this->attributes = $attributes;
        $this->file = $file;
    }

    public function toResponse($request)
    {
        $applicant = Applicant::create([
            'firstName' => $this->attributes['firstName'],
            'lastName' => $this->attributes['lastName'],
            'contact' => $this->attributes['contact'],
        ]);

        if ($this->file) {
            $extension = $this->file->getClientOriginalExtension();
            $fileName = time() . '-loanForm.' . $extension;
            $path = public_path().'/app/picture/';
            $this->file->move($path,$fileName);
            //Storage::disk('public')->put($fileName, $this->file);
            //$path = $this->file->storePubliclyAs('app/package-photos', time() . '-package.' . $extension, 'public');
            $applicant->update([
                'image_filepath' => $fileName
            ]);
        }

        return redirect('/');
    }
}
