<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Mail; 

use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function getContact() { 

        return view('contact'); 
      } 
 
       public function saveContact(Request $request) { 
 
        $rules =   $request->validate([
             'name' => ['required','max:255'],
             'email' => ['required','email','max:255'],
             'subject' => ['required','max:255'],
             'phone_number' => ['required','max:255'],
             'message' => ['required','max:255'],
             ]);
           

      
 
         Contact::create([

            'user_id'=>auth()->id(),
            'name'=>$rules['name'],
            'email'=>$rules['email'],
            'subject'=>$rules['subject'],
            'phone_number'=>$rules['phone_number'],
            'message'=>$rules['message'],
        ]);

         \Mail::send('contact_email',
         array(
             'name' => $request->get('name'),
             'email' => $request->get('email'),
             'subject' => $request->get('subject'),
             'phone_number' => $request->get('phone_number'),
             'user_message' => $request->get('message'),
         ), function($message) use ($request)
           {
              $message->from($request->email);
              $message->to('190103479@stu.sdu.edu.kz');
           });

           
         
         return back()->with('success', 'Thank you for contact us!');
 
     }
}
