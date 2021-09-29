<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\UserDocument;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginWorkerController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:worker')->except('logout');
    }
    public function showRegForm()
    {
        $currentStage=1;
        // Alert::success('Success Title', 'Success Message'); //working
       //return view('auth.worker-register2');
        return view('auth.worker-register', compact('currentStage'));
    }
    public function store(Request $request)
    {
       // return dd($request->all());
        $request->validate([
            'Firstname' => ['required', 'string', 'max:20'],
            'Lastname' => ['required', 'string', 'max:20'],
            'Othername' => ['string', 'max:20'],
            'gender' => ['string', 'max:1'],            
            'MobileN01' => ['required', 'string', 'max:11'],
            'MobileN02' => ['required', 'string', 'max:11'],
            'MobileN03' => ['required', 'string', 'max:11'],
            'ResidentialAddress' => ['required', 'string'],
            'dob' => ['required', 'date'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' =>'required|string|min:5|confirmed',
            'securityCode' =>'required|string|max:4|confirmed'
        ],
        [
                
            'Firstname.required' => 'Enter your First name',
            'Lastname.required' => 'Enter your Last name',
            'Othername.required' => 'Enter your Other name',
            'gender.required' => 'Select your Gender',
            'nationalcardno.required' => 'Enter your National ID Number',
            'ResidentialAddress.required' => 'Enter your residential address',
            'email.required' => 'Enter a valid email address',
            'MobileN01.required' => 'Enter your correct contact number',
            'MobileN01.exists' => 'This your Phone number has already been taken',
            'password.required' => 'Enter correct password', 
            'securityCode.required' => 'Enter correct security pin',
        ]);

        if ($request->hasFile('ProfilePhoto')) {
            request()->validate([
                'ProfilePhoto' => 'required',
            ]);  //mimes:png,jpg,jpeg            
        }
        if ($request->hasFile('LegalPapersUploaded')) {
            request()->validate([
                'LegalPapersUploaded' => 'required',
            ]);  //mimes:png,jpg,jpeg            
        }
        if ($request->hasFile('OtherDocsHandPrint')) {
            request()->validate([
                'OtherDocsHandPrint' => 'required',
            ]);  //mimes:png,jpg,jpeg            
        }
        if ($request->hasFile('IdCard')) {
            request()->validate([
                'IdCard' => 'required',
            ]);  //mimes:png,jpg,jpeg            
        }
        $user = User::create([
            'Firstname' =>   $request->Firstname,
            'Lastname'  =>   $request->Lastname,
            'Othername'  =>   $request->Othername,
            'MobileN01'   =>   $request->MobileN01,
            'MobileN02'   =>   $request->MobileN02,
            'MobileN03'   =>   $request->MobileN03,
            'Gender'    =>   $request->gender,
            'DOB'    =>   $request->dob,
            'securityPin'    => Hash::make($request->securityCode),
            'username'    =>   $request->username,
            'email'     =>   $request->email,            
            'ResidentialAddress'  =>   $request->ResidentialAddress,
            'password'  =>   Hash::make($request['password'])
        ]);

        $ProfilePhoto = '';
        $LegalPapersUploaded = '';
        $OtherDocsHandPrint = '';
        $IdCard = '';
        
        if ($request->hasFile('ProfilePhoto')) {
            $filenmwithext = $request->file('ProfilePhoto')->getClientOriginalName();
            $filename = pathinfo($filenmwithext, PATHINFO_FILENAME);
            $ProfilePhotoTosave = strtolower($request['Firstname'] . '_' . $request['Lastname']);
            $ext = $request->file('ProfilePhoto')->getClientOriginalExtension();
            $ProfilePhoto .= $ProfilePhotoTosave . '_' . time() . '.' . $ext;
            $path = $request->file('ProfilePhoto')->storeAs('public/images/WorkerProfileImage', $ProfilePhoto);
            User::where('id', $user->id)->first()->update([
                'ProfilePhoto' => $ProfilePhoto
            ]);
            // return  $path;
        }
        if ($request->hasFile('LegalPapersUploaded')) {
            $filenmwithext = $request->file('LegalPapersUploaded')->getClientOriginalName();
            $filename = pathinfo($filenmwithext, PATHINFO_FILENAME);
            $LegalPapersUploadedTosave = 'LegalPapersUploaded-'.strtolower($request['Firstname'] . '_' . $request['Lastname']);
            $ext = $request->file('LegalPapersUploaded')->getClientOriginalExtension();
            $LegalPapersUploaded .= $LegalPapersUploadedTosave . '_' . time() . '.' . $ext;
            $path = $request->file('LegalPapersUploaded')->storeAs('public/images/WorkerUploadedDocuments', $LegalPapersUploaded);
        }
        if ($request->hasFile('IdCard')) {
            $filenmwithext = $request->file('IdCard')->getClientOriginalName();
            $filename = pathinfo($filenmwithext, PATHINFO_FILENAME);
            $IdCardTosave = 'IdCard-'.strtolower($request['Firstname'] . '_' . $request['Lastname']);
            $ext = $request->file('IdCard')->getClientOriginalExtension();
            $IdCard .= $IdCardTosave . '_' . time() . '.' . $ext;
            $path = $request->file('IdCard')->storeAs('public/images/WorkerUploadedDocuments', $IdCard);
        }
        if ($request->hasFile('OtherDocsHandPrint')) {
            $filenmwithext = $request->file('OtherDocsHandPrint')->getClientOriginalName();
            $filename = pathinfo($filenmwithext, PATHINFO_FILENAME);
            $OtherDocsHandPrintTosave = 'OtherDocsHandPrint-'.strtolower($request['Firstname'] . '_' . $request['Lastname']);
            $ext = $request->file('OtherDocsHandPrint')->getClientOriginalExtension();
            $OtherDocsHandPrint .= $OtherDocsHandPrintTosave . '_' . time() . '.' . $ext;
            $path = $request->file('OtherDocsHandPrint')->storeAs('public/images/WorkerUploadedDocuments', $OtherDocsHandPrint);
        }
        $userdocs= new UserDocument;
        $userdocs->user_id =$user->id;
        $userdocs->IdCard = $IdCard;
        $userdocs->NationalIDCardN0 = $request->nationalcardno;
        $userdocs->PassportDocument =  $LegalPapersUploaded;
        $userdocs->LegalPapersUploaded = $LegalPapersUploaded;
        $userdocs->OtherDocsHandPrint = $OtherDocsHandPrint;
        $userdocs->save();
        if ($userdocs) {
            $status = 1;
            Alert::toast('Account Profile Successfully  created', 'success');
            $request->session()->flash('user-email', $user->email);
            return response()->json([
                'redirect' => route('worker.showLogin'),
                'created' => 'Account Profile Successfully  created',
                'status' => $status
            ]);
        }else{
            return response()->json([                
                'fail' => 'Something Went wrong',
                'status' => 0
            ]);
        }
    }
    public function showLogin()
    {
        return view('auth.worker-login');

    }
    public function login(Request $request)
    {
        // return $request->all();
        $workerdetails = User::where('email', $request->email)->first();
        if ($workerdetails == null) {
            return response()->json(['authFailed' => 'Email not exist, Kindly register now', 'LoginStatus' => null], 200);
        }
        if ($workerdetails->status == 3) {
            return response()->json(['authFailed' => 'Unable to login', 'redirect' => route('worker.acount-banned'), 'LoginStatus' => 0], 200);
        }
        if (Auth::guard('worker')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            $spin = "<i class='ml-4 fa fa-spinner fa-spin fa-fw'></i>";
            request()->session()->flash('successful-login', 'Login successfully');
            return response()->json(['authSuccess' => 'login successful, Redirecting...' . $spin, 'redirect' => route('worker.dashboard'), 'LoginStatus' => 1], 200);
            
        }else{
            request()->session()->flash('failed', 'Logout successfully');
             return response()->json(['authError' => 'Invalid email address or password. Please check your details and try again.', 'LoginStatus' => 0], 500);
        }
       
    }

    public function logout()
    {
        Session::forget('auth');
        Auth::logout();
        request()->session()->flash('success', 'Logout successfully');
        return redirect()->route('index');
    }
}
