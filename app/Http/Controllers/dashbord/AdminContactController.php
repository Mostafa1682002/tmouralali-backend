<?php

namespace App\Http\Controllers\dashbord;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('Dashboard.contacts', compact('contacts'));
    }

    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'تم حذف الرسالة بنجاح');
    }
}
