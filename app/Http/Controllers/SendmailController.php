<?php

namespace App\Http\Controllers;

use App\Notifications\DataAdded;
 use App\User; 
 use Illuminate\Http\Request;
 use Illuminate\Notifications\Notifiable;
 use Illuminate\Support\Facades\Notification;



class SendmailController extends Controller
{
    use Notifiable;


    /* $mail['message_link'] ="redirect link when user click button in mail message body";
    $mail['mail_message'] = "Email message body";
    $mail['greeting'] = "Greetings";
    $mail['mail_subject'] =  "Email subject";
    $mail['buttton_text'] =  "Button Text";
    $mail['mail_footer'] = "Email Footer text";
    
    Notification::send(Users::all(), new Sample($mail)); */
}
