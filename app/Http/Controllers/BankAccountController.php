<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\BankAccount;
use Illuminate\Http\Request;
class BankAccountController extends Controller
{
    public function index()
    {
        $bankAccounts = BankAccount::paginate(10);
        return view('bank.bank_accounts', compact('bankAccounts'));
    }
    public function create()
    {
        return view('bank.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'account_number' => 'required',
            'full_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'balance' => 'required|numeric',
            'status' => 'required|in:active,inactive,blocked'
        ]);
        BankAccount::create($data);
        return redirect()->route('bank-account-index')->with('success','Tai khoan da duoc tao than cong!');
    }
    public function edit($id){
        $bankAccounts = BankAccount::findorFail($id);
        return view('bank.edit',compact('bankAccounts'));
    }
    public function update(Request $request,$id){
        $data = $request->validate([
            'account_number' => 'required',
            'full_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'balance' => 'required|numeric',
            'status' => 'required|in:active,inactive,blocked'
        ]);
        $bankAccounts = BankAccount::findorFail($id);
        $bankAccounts->update($data);
        return redirect()->route('bank-account-index')->with('success','Tai khoan da duoc cap nhat thanh cong!');
    }
    public function delete($id)
    {
        $bankAccounts = BankAccount::findorFail($id);
        $bankAccounts->delete();
        return redirect()->route('bank-account-index')->with('success','tai khoan da duoc xoa thang cong');
    }
}