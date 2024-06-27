<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoEmail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validar os campos do formulário (opcional)
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Dados do formulário
        $to_email = 'flitz_so@hotmail.com'; // Substitua pelo seu endereço de email
        $name = $request->input('name');
        $subject = $request->input('subject');
        $message = $request->input('message');

        // Enviar o email
        Mail::to($to_email)->send(new DemoEmail($name, $subject, $message));

        return "Email enviado com sucesso!";
    }
}
