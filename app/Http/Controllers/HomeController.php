<?php

namespace App\Http\Controllers;

use App\Helpers\Qs;
use App\Models\MyClass;
use App\Models\StudentRecord;
use App\Repositories\UserRepo;
use App\Repositories\StudentRepo;

class HomeController extends Controller
{
    protected $user;
    protected $student;
    public function __construct(UserRepo $user,StudentRepo $student)
    {
        $this->user = $user;
        $this->student = $student;
    }


    public function index()
    {
        return redirect()->route('dashboard');
    }

    public function privacy_policy()
    {
        $data['app_name'] = config('app.name');
        $data['app_url'] = config('app.url');
        $data['contact_phone'] = Qs::getSetting('phone');
        return view('pages.other.privacy_policy', $data);
    }

    public function terms_of_use()
    {
        $data['app_name'] = config('app.name');
        $data['app_url'] = config('app.url');
        $data['contact_phone'] = Qs::getSetting('phone');
        return view('pages.other.terms_of_use', $data);
    }

    public function dashboard()
    {
        $d=[];
        if(Qs::userIsTeamSAT()){
            $d['users'] = $this->user->getAll();
            $d['student_records']  = StudentRecord::all();
            $d['classes']  = MyClass::all();
          // $d['student_records']  = $this->student->getAll();
        }

        return view('pages.support_team.dashboard', $d);
    }
}
