<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #f8cdda, #1c92d2);
            color: #333;
        }
        .login-container {
            background-color: white;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 25px;
            font-size: 1.8rem;
            color: #1c92d2;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            font-size: 0.9rem;
            margin-bottom: 8px;
            color: #555;
            display: inline-block;
        }
        .form-group input {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        .form-group input:focus {
            border-color: #1c92d2;
            outline: none;
        }
        .form-group button {
            width: 100%;
            padding: 12px;
            background-color: #1c92d2;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .form-group button:hover {
            background-color: #0d6efd;
            transform: translateY(-2px);
        }
        .form-group button:active {
            transform: translateY(0);
        }
        .login-container .footer {
            margin-top: 20px;
            font-size: 0.8rem;
            color: #777;
        }
        .login-container .footer a {
            color: #1c92d2;
            text-decoration: none;
        }
        .login-container .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login de Usuário</h2>
        <form action="../Controller/rota.php?acao=logarUsuario" method="POST">
            <div class="form-group">
                <label for="email_usuario">Email:</label>
                <input type="email" id="email_usuario" name="email_usuario" placeholder="Digite seu e-mail" required>
            </div>
            <div class="form-group">
                <label for="senha_usuario">Senha:</label>
                <input type="password" id="senha_usuario" name="senha_usuario" placeholder="Digite sua senha" required>
            </div>
            <div class="form-group">
                <button type="submit">Entrar</button>
            </div>
        </form>
        <div class="footer">
            <p>Esqueceu a senha? <a href="#">Clique aqui</a></p>
        </div>
    </div>
</body>
</html>
