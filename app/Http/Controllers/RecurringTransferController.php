<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RecurringTransferController
{
    public function index(Request $request)
    {
        $user = User::first();

        return $user->recurringTransfers;
    }

    public function store(Request $request)
    {
        $user = User::first();
        $data = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'frequency' => 'required|integer|min:1',
            'recipient_email' => 'required|email',
            'amount' => 'required|integer|min:1',
            'reason' => 'nullable|string',
        ]);

//        dd($user->wallet()->with("recurringTransfers")->get());
        // To be continued !
    }

    public function delete(Request $request)
    {
    }
}
