<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $userAccounts= Account::where('user_id', $userId)->select(['id', 'number', 'currency', 'balance'])->get();
        return view('users.dashboard.index',compact('userAccounts'));
    }
    public function show($account_id)
    {
        $account = Account::with('transactions')->findOrFail($account_id);
        $transactions = $account->transactions;
        return view('users.dashboard.show', compact('transactions'));
    }

}
