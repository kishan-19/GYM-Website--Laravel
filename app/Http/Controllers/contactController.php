<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Str;

class contactController extends Controller
{
    public function contact()
    {
        $ms = null;
        $pageTital = "Contact Us";
        $data = compact('pageTital', 'ms');
        return view('contact')->with($data);
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'email' => 'email|required',
                'website' => 'nullable'
            ]
        );
        // echo "<pre>";
        // print_r($request->all());
        // die;
        $contact = new Contact;
        $contact->name = $request['name'];
        $contact->email = str::lower($request['email']);
        $contact->website = $request['website'];
        $contact->comment = $request['comment'];

        try{
            $contact->save();
            $request->session()->put('saveMessage','Successfully');
            $request->session()->put('classesAccess','access');
            return redirect()->route('contactPage');
            }catch(Exception $e){
                // $e->getMessage();
                return redirect('/404');
            }
    }
}
