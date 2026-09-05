<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request (Single Action / Invokable Controller).
     */
    public function __invoke(Request $request)
    {
        $contactDetails = [
            'office' => 'Office of the College Registrar & Student Affairs',
            'email' => 'support@studentportal.trimexcolleges.edu.ph',
            'phone' => '+63 (02) 8123-4567',
            'hours' => 'Monday – Friday, 8:00 AM – 5:00 PM',
            'location' => 'CCS Building, 3rd Floor, Computer Lab 304',
        ];

        return view('contact', compact('contactDetails'));
    }
}
