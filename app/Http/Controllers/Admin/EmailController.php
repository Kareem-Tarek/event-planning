<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class EmailController extends Controller
{
    public function inbox()
    {
        $rows = Contact::paginate(12);
        return view('dashboard.email.inbox',compact('rows'));
    }

    public function allMail()
    {
        $rows = Contact::paginate(12);
        return view('dashboard.email.allMail',compact('rows'));
    }
    public function trash()
    {
        $rows = Contact::onlyTrashed()->paginate(12);
        return view('dashboard.email.trash',compact('rows'));
    }

    public function show($id)
    {
        $readMail = Contact::findOrFail($id);
        if($readMail->is_read == 0) {
            $readMail->update(['is_read' => 1]);
        }
        return view('dashboard.email.show',compact('readMail'));
    }
}
