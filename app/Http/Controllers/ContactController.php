<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
     public function contact(Request $request) {
      $name = $request->name;
      $email = $request->email;
      $subject = $request->subject;
      $messageText = $request->message;

      $data = array('name'=> $name, 'email' => $email, 'subject' => $subject, 'messageText' => $messageText);

      Mail::send('mail', $data, function($message) {
        $message->to('info@ukluxurycarhire.co.uk', 'UK Luxury Car Hire')->subject('Contact US');
        $message->from('no-reply@stallionecom.co.uk','UK Luxury Car Hire');
      });

      return redirect()->route('contact')->with('success','Your request has been received!');
   }
    public function form(Request $request) {
      $fleets = $request->fleets;
      $pick_up = $request->pick_up;
      $drop_off = $request->drop_off;
      $pick_date = $request->pick_date;
      $drop_date = $request->drop_date;
      $pick_time = $request->pick_time;

      $data = array('fleets'=> $fleets, 'pick_up'=> $pick_up, 'drop_off' => $drop_off, 'pick_date' => $pick_date, 'drop_date' => $drop_date, 'pick_time' => $pick_time);

      Mail::send('booking', $data, function($message) {
        $message->to('info@ukluxurycarhire.co.uk', 'UK Luxury Car Hire')->subject('Booking Form');
        $message->from('no-reply@stallionecom.co.uk','UK Luxury Car Hire');
      });

      return redirect()->route('form')->with('success','Your booking request has been received.We will contact you shortly!');
   }

    public function book(Request $request) {
      $pick_up = $request->pick_up;
      $drop_off = $request->drop_off;
      $pick_date = $request->pick_date;
      $drop_date = $request->drop_date;
      $name = $request->name;
      $email = $request->email;
      $pick_time = $request->pick_time;
      $number = $request->number;
      $seats = $request->seats;
      $note = $request->note;

      $data = array('pick_up'=> $pick_up, 'drop_off' => $drop_off, 'pick_date' => $pick_date, 'drop_date' => $drop_date, 'name' => $name, 'email' => $email, 'pick_time' => $pick_time, 'number' => $number, 'seats' => $seats, 'note' => $note);

      Mail::send('book-form', $data, function($message) {
        $message->to('info@ukluxurycarhire.co.uk', 'UK Luxury Car Hire')->subject('Booking Form');
        $message->from('no-reply@stallionecom.co.uk','UK Luxury Car Hire');
      });

      return redirect()->route('book')->with('success','Your booking request has been received.We will contact you shortly!');
   }
}
