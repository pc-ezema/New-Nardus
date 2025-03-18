<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomePageController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function aboutUs()
    {
        return view('frontend.about');
    }

    public function scents()
    {
        return view('frontend.scents');
    }

    public function cosmetics()
    {
        return view('frontend.cosmetics');
    }

    public function essentialOil()
    {
        return view('frontend.essentialOil');
    }

    public function health()
    {
        return view('frontend.health');
    }

    public function contactUs()
    {
        return view('frontend.contact');
    }

    public function submitContact(Request $request)
    {
        // Define your validation rules
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'phone_number' => 'required|string',
            'message' => 'required|string',
        ]);

        // If validation fails, return the error response
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed. Please see errors parameter for details.',
                'errors' => $validator->errors()
            ]);
        }
        // Process form data (e.g., send email, save to database)
        /** Store information to include in mail in $data as an array */
        $data = array(
            'name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone_number,
            'subject' => $request->subject,
            'description' => $request->message,
            'created_at' => now(),
            'admin' => 'info@nardus.ng',
        );

        /** Send message to the admin */
        Mail::send('emails.contact', $data, function ($m) use ($data) {
            $m->to($data['admin'])->subject(config('app.name').' Contact Form Notification');
        });

        // Return success response
        return response()->json([
            'success' => true,
            'message' => 'Thank you for reaching out! Your message has been successfully sent. We will get back to you shortly.',
        ]);
    }

    public function faqs()
    {
        return view('frontend.faqs');
    }

    public function ourOutlet()
    {
        return view('frontend.ourOutlet');
    }

    public function testimonial()
    {
        return view('frontend.essential_oil');
    }

    public function training()
    {
        return view('frontend.training');
    }

    public function wealthline()
    {
        return view('frontend.wealthline');
    }

    public function submitOrder(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'school' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'level' => 'required|string|max:50',
            'year_of_graduation' => 'required|integer|min:1900|max:' . date('Y'),
            'order' => 'required|string',
            'location' => 'required|string|max:255',
            'proof_of_payment' => 'required|file|mimes:jpg,png,pdf|max:2048', // Adjust as needed
        ]);

        // If validation fails, return errors
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Handle file upload
        $proofPath = null;
        if ($request->hasFile('proof_of_payment')) {
            $proofPath = $request->file('proof_of_payment')->store('proofs', 'public');
        }

        // Create a new order
        $order = new Order();
        $order->name = $request->name;
        $order->school = $request->school;
        $order->address = $request->address;
        $order->level = $request->level;
        $order->year_of_graduation = $request->year_of_graduation;
        $order->order = $request->order;
        $order->location = $request->location;
        $order->proof_of_payment = $proofPath; // Store file path
        $order->save();

        // Process form data (e.g., send email, save to database)
        /** Store information to include in mail in $data as an array */
        $data = array(
            'name' => $request->name,
            'school' => $request->school,
            'address' => $request->address,
            'level' => $request->level,
            'year_of_graduation' => $request->year_of_graduation,
            'order' => $request->order,
            'location' => $request->location,
            'proof_of_payment' => $proofPath, // Store file path
            'created_at' => now(),
            'admin' => 'info@nardus.ng',
        );

        /** Send message to the admin */
        Mail::send('emails.order', $data, function ($m) use ($data) {
            $m->to($data['admin'])->subject(config('app.name').' New Wealthline Submission');
        });

        // Return success response
        return response()->json([
            'success' => true,
            'message' => 'Wealthline submitted successfully!'
        ]);
    }
}
