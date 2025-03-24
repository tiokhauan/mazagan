<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function handleWhapiWebhook(Request $request)
    {
        // Receba os dados enviados pelo Whapi
        $data = $request->all();

        // Exemplo de como verificar os dados recebidos
        // \Log::info('Dados do Webhook do Whapi:', $data);

        // Processar os dados aqui, por exemplo:
        // 1. Verificar se a mensagem foi entregue
        // 2. Enviar confirmações ou outras ações com base nos dados

        return response()->json(['status' => 'success']);
    }
}
