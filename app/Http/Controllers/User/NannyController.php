<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Nanny;
use App\Models\Payment;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class NannyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nannies = Nanny::latest()->get();
        return view('client.nanny', compact('nannies'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $payment = new Payment;
        $payment['name'] = $request->name;
        $payment['nanny_id'] = $id;
        $payment['email'] = $request->email;
        $payment['phone'] = $request->phone;
        $payment['payment_name'] = $request->payment_name;
        $payment['payment_number'] = $request->payment_number;
        $payment['payment_secret'] = $request->payment_secret;
        $payment['location'] = $request->location;
        $payment['user_id'] = FacadesAuth::id();
        $payment['description'] = $request->description;
        $payment->save();


        $nanny = Nanny::find($id);
        $nanny->user_id = Auth::id();
        $nanny->save();
        return redirect('/nanny/hire');
    }

    public function hire($id)
    {
        $item = Nanny::find($id);
        return view('client.hire', compact('item'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function own_nanny_list()
    {
        $nannies = Nanny::where('user_id', Auth::id())->get();
        return view('client.Account.nanny', compact('nannies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comments = Comment::where('nanny_id', $id)->get();
        $show = Nanny::where('id', $id)->first();
        return view('client.nanny_show', compact('show', 'comments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cancel($id)
    {
        $nanny = Nanny::find($id);
        $nanny->user_id = null;
        $nanny->save();
        return redirect('/');
    }
}
