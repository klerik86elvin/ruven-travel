<?php

namespace App\Http\Controllers;

use App\Mail\FormRequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function callToMe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required'
        ]);
        if ($validator->fails())
        {
            return response()->json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()

            ), 400); // 400 being the HTTP code for an invalid request.
        }
        Mail::to('elvin.m9292@gmail.com')->send(new FormRequestMail($validator->validate(),'callToMe'));
        return $request->all();
    }

    public function order(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'date' => 'required',
            'surname' => 'required',
            'tours' => 'required|array',
            'transport' => 'required',
            'adultsCount' => 'required|integer',
            'childCount' => 'required|integer',
            'note' => 'nullable',

        ]);
        if ($validator->fails())
        {
            return response()->json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()

            ), 400); // 400 being the HTTP code for an invalid request.
        }
        Mail::to('ruventravel@gmail.com')->send(new FormRequestMail($validator->validate(),'order'));
        return $validator->validate();
    }
}
