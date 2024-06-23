<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Função para validar e limpar dados recebidos
    function sanitizeInput($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    // Recebe os dados do formulário e sanitiza-os
    $name = sanitizeInput($_POST['name'] ?? '');
    $birthdate = sanitizeInput($_POST['birthdate'] ?? '');
    $address = sanitizeInput($_POST['address'] ?? '');
    $phone = sanitizeInput($_POST['phone'] ?? '');
    $email = sanitizeInput($_POST['email'] ?? '');
    $objective = sanitizeInput($_POST['objective'] ?? '');
    $education = isset($_POST['education']) ? sanitizeInput($_POST['education']) : '';
    $experiences = isset($_POST['experiences']) ? array_map('sanitizeInput', $_POST['experiences']) : [];

    // Função para calcular a idade
    function calculateAge($birthdate) {
        $today = new DateTime();
        $diff = $today->diff(new DateTime($birthdate));
        return $diff->y;
    }

    // Calcula a idade
    $age = calculateAge($birthdate);

    // Upload da foto do usuário
    
    

    // Início do HTML para exibir o currículo
    echo '<!DOCTYPE html>';
    echo '<html lang="pt-br">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<title>Seu Currículo</title>';
    echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">';
    echo '<style>';
    echo 'body { font-size: 16px; background-color: #f5f5f5; }';
    echo '.container { max-width: 800px; margin: auto; background-color: #fff; padding: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.1); border-radius: 10px; }';
    echo '.header { text-align: center; margin-bottom: 20px; }';
    echo '.profile-img { width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin-bottom: 20px; }';
    echo 'h2, h4 { margin-bottom: 0.5rem; }';
    echo 'p { margin-bottom: 0.2rem; }';
    echo '.btn-pdf { margin-top: 20px; }'; // Classe para o botão "Salvar em PDF"
    echo '@media print { .btn-pdf { display: none; } }'; // Esconde o botão durante a impressão
    echo '</style>';
    echo '</head>';
    echo '<body>';
    echo '<div class="container mt-5">';
    echo '<div class="header">';
    echo '<h2>' . $name . '</h2>';
    echo '<p><strong>Data de Nascimento:</strong> ' . $birthdate . '</p>';
    echo '<p><strong>Idade:</strong> ' . $age . '</p>';
    echo '<p><strong>Endereço:</strong> ' . $address . '</p>';
    echo '<p><strong>Telefone:</strong> ' . $phone . '</p>';
    echo '<p><strong>Email:</strong> ' . $email . '</p>';
    echo '</div>';
    echo '<h4 class="mt-4">Objetivo Profissional</h4>';
    echo '<p>' . $objective . '</p>';
    echo '<h4>Formação Acadêmica</h4>';
    echo '<p>' . $education . '</p>';
    echo '<h4>Experiências Profissionais</h4>';
    echo '<ul>';
    foreach ($experiences as $experience) {
        echo '<li>' . $experience . '</li>';
    }
    echo '</ul>';
    echo '<button type="button" class="btn btn-success btn-pdf" onclick="window.print();">Salvar em PDF</button>'; // Botão para salvar em PDF
    echo '</div>';
    echo '</body>';
    echo '</html>';
}
?>