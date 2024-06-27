<!-- resources/views/send-email.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar E-mail</title>
</head>

<body>
    <h2>Enviar E-mail</h2>

    <form method="POST" action="{{ route('send.email') }}">
        @csrf
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="subject">Assunto:</label><br>
        <input type="text" id="subject" name="subject" required><br><br>

        <label for="message">Mensagem:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>

        <button type="submit">Enviar E-mail</button>
    </form>
</body>

</html>