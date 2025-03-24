<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;
use App\Mail\LeadMail;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $lead = Lead::create($validated);

        Mail::to('contato@mazaganinfo.com.br')->send(new LeadMail($validated));

        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
