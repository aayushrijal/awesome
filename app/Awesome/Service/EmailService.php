<?php

namespace App\Awesome\Service;

class EmailService
{
    /**
     * EmailService constructor.
     */
    public function __construct()
    {
        $this->sendGrid = new \SendGrid(env('SENDGRID_USERNAME', 'username'), env('SENDGRID_PASSWORD', 'password'));
    }

    /**
     * @param $messageData
     *
     * @return null|\stdClass
     */
    public function sendMessage($messageData)
    {
        if (!$this->sendGrid) {
            return null;
        }

        $emailFrom = $messageData['email'];
        $subject   = "About your information";

        return $this->makeEmail($subject, $emailFrom, $messageData['message']);
    }

    /**
     * @param $subject
     * @param $emailFrom
     * @param $message
     *
     * @return \stdClass
     */
    protected function makeEmail($subject, $emailFrom, $message)
    {
        $sendgrid = new \SendGrid(
            env('SENDGRID_USERNAME', 'username'),
            env('SENDGRID_PASSWORD', 'password'),
            array("turn_off_ssl_verification" => true)
        );
        $email    = new \SendGrid\Email();

        $email
            ->addTo('roshadky08@gmail.com')
            ->setFrom($emailFrom)
            ->setSubject($subject)
            ->setHtml($message);
        $response = $sendgrid->sendEmail($email);

        return $response;
    }
}