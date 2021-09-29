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
    public $securityCode;
    public $dobpoicked;
    public $confirm_password;

    public $select_date_of_birth;
    protected $listeners = ["selectDateOfBirth" => 'getSelectedDate'];

    public function mount()
    {
        $this->currentStage = 1;
    }

    public function render()
    {
        return view('livewire.worker-register-component');
    }

    public function getSelectedDate($date)
    {

        $this->select_date_of_birth = $date;
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
    public function updated($fields)
    {
        if ($this->currentStage == 1) {
            $this->validateOnly(
                $fields,[
                'firstName'             => 'required|string',
                'Lastname'              => 'required|string',
                'Othername'             => 'required|string',
                'MobileN01'             => 'required',
                'MobileN02'             => 'required',
                // 'dobpoicked'            => 'required',
                'gender'                => 'required|string',
                'email'                 => 'required|string|email|unique:users',                
                'ResidentialAddress'    => 'required|string',
                'nationalcardno'        => 'required|string',
            ]);             
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
                'dobpoicked'  => 'required',
                'gender'    => 'required|string',
                'email'    => 'required|string|email|unique:users',               
                'ResidentialAddress'    => 'required|string',
                'nationalcardno'    => 'required|string',
            ]);
            if ($this->currentStage == 3) {
                $this->validate([
                    'password' => 'required|string|confirmed',
                    'username'  => 'required|string',
                ]);
            } 
        }

        // if ($this->currentStage == 2) {
        //     if ($request->has('ProfilePhoto') || $request->has('PassportDocument') || $request->has('LegalPapersUploaded')) {
        //         request()->validate([
        //             'ProfilePhoto' => 'required',
        // 'IdCard'    => 'required|string',
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
        dd($this->validate($request));

    }
}
