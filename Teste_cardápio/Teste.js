const express = require('express');
const app = express();
const port = 3000;

// Simulação de verificação de login
function isAuthenticated(req) {
    // Verifica se o usuário está autenticado, pode usar req.session ou JWT para validar
    return req.user != null; // Suponha que req.user seja preenchido quando o usuário está logado
}

// Middleware para proteger a rota
function loginRequired(req, res, next) {
    if (isAuthenticated(req)) {
        next(); // Usuário autenticado, permite o acesso
    } else {
        res.status(401).send('Faça login primeiro'); // Bloqueia o acesso e redireciona
    }
}

// Rota de login simulada
app.get('/login', (req, res) => {
    res.send('Página de Login');
});

// Rota protegida de assinatura
app.post('/subscribe', loginRequired, (req, res) => {
    res.send("Você acessou a função de assinatura!");
});

app.listen(port, () => {
    console.log(Servidor rodando em http://localhost:${port});
});