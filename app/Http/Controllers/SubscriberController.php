<?php

namespace App\Http\Controllers;

use App\Mail\Subscribe;
use App\Models\Subscriber;
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
        $subscriber = Subscriber::create([
            'email' => $email,
        ]);

        Mail::to($email)->send(new Subscribe($subscriber));

        return redirect()->route('/');

    }

   /*  public function subscriber(Request $request) 
    {   
    $validator = Validator::make($request->all(), [
         'email' => 'required',
    ]);

    if ($validator->fails()) {
        return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
    }  

    $email = $request->all()['email'];
        $subscriber = Subscriber::create([
            'email' => $email
        ]
    ); 

    if ($subscriber) {
        Mail::to($email)->send(new Subscribe($email));
        return redirect()->back();
    }
    } */
}
                    