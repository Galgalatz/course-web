<?php

namespace App\Http\Controllers;
use App\EmailsTivi;
use Illuminate\Http\Request;
use App\Http\Requests\TiviRequest;
use Session;

class TiviController extends Controller
{
    public function index()
    {
        $title = 'מכבי טבעי - כתובות';
        $tivi_emails = EmailsTivi::all();
        return view('emails-address', compact('title', 'tivi_emails'));
    }

    public function create(){
        $title = 'מכבי טבעי - הוספה';
        return view('add-maccabi-tv', compact('title'));
    }

    public function store(TiviRequest $request)
    {
        $tivi = new EmailsTivi();
        $tivi->email_name = $request['email'];
        $tivi->city_name = $request['city'];

        $tivi->save();
        Session::flash('sm', 'נוסף בהצלחה');
        Session::flash('smpos', 'toast-top-right');

        return redirect()->route('maccabi-tv');
    }

    public function destroy($id)
    {
        EmailsTivi::destroy($id);
        Session::flash('sm', 'הכתובת נמחקה בהצלחה!');
        Session::flash('smpos', 'toast-top-right');
        return redirect()->route('maccabi-tv');
    }
}
