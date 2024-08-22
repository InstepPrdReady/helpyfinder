<?php

namespace App\Services;

use SendinBlue\Client\Api\TransactionalEmailsApi;
use SendinBlue\Client\Configuration;
use GuzzleHttp\Client;
use Exception;

class EmailService
{
    

    public static function sendEmail($toEmail, $toName, $subject, $message)
    {
        try {
            // Initialize the Brevo (Sendinblue) client
            $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', config('services.brevo.api_key'));
            $apiInstance = new TransactionalEmailsApi(
                new Client(),
                $config
            );

            // Prepare the email data
            $emailData = [
                'subject' => $subject,
                'sender' => ['email' => 'office@insteptechnologies.com', 'name' => 'Your Name'],
                'to' => [['email' => $toEmail, 'name' => $toName]],
                'htmlContent' => '<p>' . $message . '</p>',
            ];

            // Send the email
            $apiInstance->sendTransacEmail($emailData);

            return true;
        } catch (Exception $e) {
            // Log or display the detailed error message
            error_log('Failed to send email: ' . $e->getMessage());
            return false;
        }
    }

}
