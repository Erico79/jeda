<?php

namespace App\Http\Controllers;

use App\ContactType;
use App\Masterfile;
use App\Role;
use App\Form;
use Illuminate\Http\Request;

use App\Http\Requests;

class MasterfileController extends Controller
{
    public function index(){
        $roles = Role::all();
        $main_ctype = ContactType::where('contact_type_code', 'MAIN')->first();
        $forms = Form::all();

        return view('masterfile.index', array(
            'roles' => $roles,
            'main_ctype' => $main_ctype,
            'forms' => $forms
        ));
    }
}
