<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .mt-custom {
            margin-top: 6rem;
        }
    </style>
</head>
<body>
    <div class="container mt-custom">
        <h1 class="text-center"><strong>Fale comigo!</strong></h1>
        <form name="formContato" method="post" onsubmit="validateForm(event)">
            <label for="nome"><strong><h2>Digite seu nome:</h2></strong></label>
            <input type="text" name="nome" id="nome" required
            placeholder="nome completo"
            class="form-control form-control-lg mt-2">
            <label for="email"><strong><h2>Digite seu e-mail:</h2></strong></label>
            <input type="email" name="email" id="email" required
            placeholder="digite um email válido"
            class="form-control form-control-lg mt-2">

            <button type="submit" class="margin btn btn-success btn-lg mt-3">
               <strong>ENVIAR MENSAGEM</strong>
            </button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
