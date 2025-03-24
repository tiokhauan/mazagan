<!-- resources/views/emails/lead.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Lead de Contato</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #4CAF50;
            font-size: 24px;
        }
        .content {
            font-size: 16px;
            line-height: 1.6;
        }
        .content p {
            margin: 10px 0;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #777;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h1>Você recebeu um novo lead!</h1>
        </div>
        <div class="content">
            <p><strong>Nome:</strong> {{ $lead['name'] }}</p>
            <p><strong>Email:</strong> {{ $lead['email'] }}</p>
            <p><strong>Telefone:</strong> {{ $lead['phone'] }}</p>
            <p><strong>Assunto:</strong> {{ $lead['subject'] }}</p>
            <p><strong>Mensagem:</strong></p>
            <p>{{ $lead['message'] }}</p>
        </div>
        <div class="footer">
            <p>Este é um e-mail automático. Por favor, não responda.</p>
        </div>
    </div>

</body>
</html>
