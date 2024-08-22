<?php
namespace App\Http\Controllers;
use App\Services\EmailService;
use Illuminate\Http\Request;

class BrevoEmailController extends Controller
{
    protected $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function sendContactQueryEmail(Request $request)
    { 
        $recp_email = $request->email;
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $recp_name = $firstname . " " . $lastname;
        $rec_message = $request->message;

        $email_sent = $this->emailService->sendEmail($recp_email, $recp_name, 'Contact Form', $rec_message);
        if ($email_sent) {
             echo "Email sent successfully";
        } else {
            echo "There is problem to send Email";
        }
    }
}
