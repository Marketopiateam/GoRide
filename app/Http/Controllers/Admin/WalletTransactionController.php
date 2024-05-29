<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WalletTransaction;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WalletTransactionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('wallet_transaction_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.wallet-transaction.index');
    }

    public function create()
    {
        abort_if(Gate::denies('wallet_transaction_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.wallet-transaction.create');
    }

    public function edit(WalletTransaction $walletTransaction)
    {
        abort_if(Gate::denies('wallet_transaction_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.wallet-transaction.edit', compact('walletTransaction'));
    }

    public function show(WalletTransaction $walletTransaction)
    {
        abort_if(Gate::denies('wallet_transaction_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $walletTransaction->load('user');

        return view('admin.wallet-transaction.show', compact('walletTransaction'));
    }
}
