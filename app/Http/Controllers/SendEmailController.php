<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class SendEmailController extends Controller
{
    public function index(Type $var = null)
    {
        $data = [
            'name' => 'Tushar',
            'data' => 'Hello this is test one'
        ];
        $user['send_to'] = 'md.tushar1804@gmail.com';

        Mail::send('mail', $data, function ($message) use ($user) {
            $message->to($user['send_to']);
            $message->subject('Hello Dev');
        });

        echo "email sended... :-) to ".$user['send_to'];
    }
}
