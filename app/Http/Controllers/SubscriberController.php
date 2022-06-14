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

   /*  $email = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscribers',
        ]);
        
        if ($email->fails()) 
        {
            return redirect()->back();
        } 
        else 
        {
            $subscriber = Subscriber::create([
                'email' => $email,
            ]);
    
            Mail::to($email)->send(new Subscribe($subscriber));
        }
        

        return redirect()->route('/');  */
}
                    