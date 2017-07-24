<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function index()
	{
		return view('pages.index');
	}

	public function about()
	{
		return view('pages.about');
	}

	public function products()
	{
		return view('pages.products');
	}

	public function contact()
	{
		return view('pages.contact');
	}

	public function sendEmailToSupport(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|email',
            'phone'		=> 'required',
            'message'   => 'required|min:10|max:1000'
        ]);

        \Mail::send('emails.reminder', ['data'	=> $request], function ($m) use ($request) {
            // $m->to("zita0821@freemail.hu")
            $m->to("attila.kovacs92@gmail.com")
	            ->subject('Zsömli Pékség')
		        ->from($request->email, $request->name);
        });

        // flash()->success('Köszönjük!', 'Az üzenetét elküldtük.');
        // flash()->success(trans('message.title'), trans('message.body'));

        return back();
    }
}
