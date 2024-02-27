<?php

namespace App\Http\Controllers;

use App\Models\PkSubscriber;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Exception;

class joinController extends Controller
{
    public function joinGym()
    {
        $pageTital = "Join Us";
        $data = compact('pageTital');
        return view('join')->with($data);
    }
    public function pksub(Request $request)
    {
        echo "sdfhjlkmlsdfnkjfrnofjlrnkf";
        $request->validate(
            [
            'Fname' => 'required',
            'Address' => 'required',
            'City' => 'required',
            'PinCode' => 'required',
            'PhoneNumber' => 'required',
            'Email' => 'required | email',
            'EmFname' => 'required',
            'EmPhoneNumber' => 'required',
        ]
    );
        echo "<pre>";
        print_r($request->all());
        die;
        $pkSubscriber = new PkSubscriber;
        $pkSubscriber->F_name = $request['Fname'];
        $pkSubscriber->L_name = $request['Lname'];
        $pkSubscriber->Address_1 = $request['Address'];
        $pkSubscriber->Address_2 = $request['Address1'];
        $pkSubscriber->City = $request['City'];
        $pkSubscriber->Pin_Code = $request['PinCode'];
        $pkSubscriber->Price = $request['price'];
        $pkSubscriber->Number = $request['PhoneNumber'];
        $pkSubscriber->Gender = $request['Gender'];
        $pkSubscriber->Email = $request['Email'];
        $pkSubscriber->E_FName = $request['EmFname'];
        $pkSubscriber->E_LName = $request['EmLame'];
        $pkSubscriber->E_Number = $request['EmPhonerNumber'];
        $pkSubscriber->E_Relationship = $request['EmRelationship'];


        $pkSubscriber->save();
        try {
            $pkSubscriber->save();
            return redirect()->route('joinGymPage');
        } catch (Exception $e) {
            echo $e->getMessage();
            return redirect('/404');

         }
    }
}
