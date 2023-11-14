<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::where('user_id', Auth::id())->get();
        return view('client.Account.payment', compact('payments'));
    }

    public function show($id)
    {
        $show = Payment::find($id);
        return view('client.Account.show', compact('show'));
    }
}
