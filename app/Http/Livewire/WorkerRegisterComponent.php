<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class WorkerRegisterComponent extends Component
{
    use WithFileUploads;
    public $totalStage = 3;
    public $currentStage = 1;
    public $firstName;
    public $Lastname;
    public $Othername;
    public $MobileN01;
    public $MobileN02;
    public $MobileN03;
    public $ProfilePhoto;
    public $ResidentialAddress;
    public $nationalcardno;
    public $City;
    public $DOB;
    public $gender;
    public $email;
    public $password;
    public $IdCard;
    public $PassportDocument;
    public $LegalPapersUploaded;
    public $OtherDocsHandPrint;
    
    public $username;
    public $securitycode;
    public $confirm_password;

    public function mount()
    {
        $this->currentStage = 1;
    }

    public function render()
    {
        return view('livewire.worker-register-component');
    }

    public function PreviousBtnt()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStage--;
        if ($this->currentStage < 1) {
            $this->currentStage = 1;
        }
    }
    public function ContinueNext()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStage++;
        if ($this->currentStage > $this->totalStage) {
            $this->currentStage = $this->totalStage;
        }
    }

    public function validateData()
    {
        if ( $this->currentStage == 1 ) {
            $this->validate([
                'firstName' => 'required|string',
                'Lastname'  => 'required|string',
                'Othername' => 'required|string',
                'MobileN01' => 'required',
                'MobileN02' => 'required',
                'DOB'       => 'required|date',
                'gender'    => 'required|string',
                'email'    => 'required|string|email|unique:users',
                'IdCard'    => 'required|string',
            ]); 
        }

        // if ($this->currentStage == 2) {
        //     if ($request->has('ProfilePhoto') || $request->has('PassportDocument') || $request->has('LegalPapersUploaded')) {
        //         request()->validate([
        //             'ProfilePhoto' => 'required',
        //             'PassportDocument' => 'required',
        //             'LegalPapersUploaded' => 'required',
        //             'OtherDocsHandPrint' => 'required',
        //         ]);   //mimes:png,jpg,jpeg
        //     }
        // }

        if ($this->currentStage == 3) {
            $this->validate([
                'password' => 'required|string|confirmed',
                'username'  => 'required|string',
            ]);
        }
    }


    public function    SaveWorker(Request $request){

    }
}
