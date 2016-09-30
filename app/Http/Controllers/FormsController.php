<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;

use App\Http\Requests;

class FormsController extends Controller
{
    public function index(){
        $form = Form::all();
        return view('form.index')->with_form($form);
    }

    public function store(Request $request){
        // validation
        $rules = array(
            'form_name' => 'required|max:255'
        );
        $this->validate($request, $rules);

        // persist the data to the db
        $form = Form::create(array(
            'class_name' => $request->form_name,
            'class_code' => $request->form_code,
//            'school_id' =>
         ));
        $form->save();

    }

    public function update(Request $request){
        // validation

        Form::where('id', $request->id)
            ->update(array(
                'class_name' => $request->form_name
            ));
    }

    public function destroy(Request $request){
        Form::destroy($request->id);
    }
}
