<?php

namespace App\Http\Controllers;

use App\Mail\Subscribe;
use App\Models\Subscriber;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SubscriberController extends Controller
{

    public function subscriber(Request $request)
    {
        $email = $request->all()['email'];
        $users = User::all();
        $subscriber = Subscriber::create([
            'email' => $email,
        ]);


        foreach ($users as $user) {
            if ($user->is_registered == false) {
                Mail::to($user->email)->send(new Subscribe($subscriber));
                return redirect()->route('/');
            } else {
                return redirect()->route('/');
            }
        }

        /* if ($subscriber) {
            Mail::to($email)->send(new Subscribe($subscriber));
            return redirect()->route('/');
        } else {
            return redirect()->route('/');
        } */

        // if subscriber is created, send email to subscriber but do not send email if the user is already existing
        /* if ($subscriber) {
            Mail::to($email)->send(new Subscribe($subscriber));
            return redirect()->route('/');
        } else {
            return redirect()->route('/');
        } */

        

    }
}
                    