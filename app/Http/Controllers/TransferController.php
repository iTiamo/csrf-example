<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\Transfer;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{
    function transfer (Transfer $request) {
        $sender = Auth::user();
        $receiver = User::findOrFail($request->player);
    
        $sender->coins -= $request->amount;
        $receiver->coins += $request->amount;
    
        $sender->save();
        $receiver->save();
    
        return back();
    }
}
