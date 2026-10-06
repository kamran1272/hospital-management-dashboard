<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalController extends Controller
{
   public function products(){
   	return view('products');
   }
   public function services(){
      return view('services');
   }
   public function clients(){
      return view('clients');
   }
   public function companies(){
      return view('companies');
   }
   public function demo(){
      return view('demo');
   }
   public function appointment(){
      return view('appointment-schedule');
   }
   public function patient(){
      return view('patient-list');
   }


    public function demorquest()
    {
        // Validate the incoming form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new DemoRequest model instance and save the data
        DemoRequest::create($validatedData);

        // You can add any additional logic here, such as sending emails or notifications

        // Redirect back to the form with a success message
        return redirect('demo')->back()->with('success', 'Request submitted successfully!');
    }
}
