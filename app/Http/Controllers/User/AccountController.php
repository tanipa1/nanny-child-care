<?php

namespace App\Http\Controllers\User;

use DateTime;
use App\Models\BabyInfo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function dashboard(){
        
        $baby = BabyInfo::where('owner_id', '=', Auth()->user()->id)->first();

        // if($baby){
        //     $bday = new DateTime($baby->date_of_birth);
        //     $today = new Datetime(date('m.d.y'));
        //     $diff = $today->diff($bday);
        //     $total_days = $diff->days;
        //     $total_month = $total_days / 30;
        //     $to_int_month = (int)$total_month;
        //     dd($to_int_month);
        // }
        
        return view('client.Account.dashboard', compact('baby'));
    }

    public function addBabyInfo(Request $request){
        $request->validate([
            'name' => 'required',
            'date_of_birth' => 'required'
        ]);

        $form_data = array(
            'owner_id'=> Auth()->User()->id,
            'name'=> $request->name,
            'date_of_birth'=> $request->date_of_birth,
        );

        BabyInfo::create($form_data);
        return redirect()->back();
    }

    public function babySuggestion(){
        return view('client.Account.baby-suggestion');
    }
}
