<?php

namespace App\Http\Controllers;

use App\Awesome\Service\EmailService;
use App\Http\Requests\EmailRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var EmailService
     */
    private $email;

    /**
     * HomeController constructor.
     *
     * @param EmailService $email
     */
    public function __construct(EmailService $email)
    {
        $this->email = $email;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('home.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function gallery()
    {
        return view('home.gallery');
    }

    /**
     * @param EmailRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendMessage(EmailRequest $request)
    {
        $this->email->sendMessage($request->all());

        if ($this->email) {
            $status = 'success';
            $msg    = "Email sent successfully!!!";
        } else {
            $status = 'error';
            $msg    = "Email sending failed!!!";
        }

        return redirect()->route('home')->withInput()->with($status, $msg);
    }
}
