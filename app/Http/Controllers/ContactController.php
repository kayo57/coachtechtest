<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ContactController extends Controller

{
 public function index(Request $request)
    {
        //$contacts = Contact::all();
        $contacts = DB::select('select * from contacts');
        //$contacts = DB::table('contacts')->select('fullname','email','address','postcode','opinion')->get();
        return view('index');
        
    }
    public function create(Request $request)
    {
        $validate_rule = [
        'postcode' => 'required|max:8',
        'opinion' => 'required|max:120',
        'fullname' => 'required|max:20',
        'email' => 'required|email',
        'address' => 'required',
        
        
 ];
    $this->validate($request, $validate_rule);
        $form = $request->all();
        
        unset($form['_token']);
        //dd($form);
        Contact::create($form);
        return redirect('/');
    }

    //public function create(Request $request)
    //{
        //$param = [
            //'fullname' => $request->fullname,
            //'gender' => $request->gender,
            //'email' => $request->email,
            //'postcode' => $request->postcode,
            //'address' => $request->address,
            //'building_name' => $request ->building_name,
            //'opinion' => $request->opinion
            
        //];
        //DB::insert('insert into contacts (fullname, email, postcode, address, building_name, opinion) values (:fullname, :email, :postcode, :address, building_name, :opinion)', $param);
        //return redirect('/');
    //}

    

}