# apo_final
Gerador de Currículos
Descrição
Este projeto é um Gerador de Currículos web que permite aos usuários criar currículos personalizados preenchendo um formulário com suas informações pessoais, formação acadêmica, habilidades e experiências profissionais. O aplicativo gera um currículo no formato desejado, pronto para ser baixado ou impresso.

Estrutura do Projeto
O projeto é composto pelos seguintes arquivos:

index.html: Arquivo principal que contém o formulário para inserção das informações do currículo.
styles.css: Arquivo de estilos para o layout do formulário.
app.js: Script para adicionar dinamicamente campos de formação acadêmica, habilidades e experiências profissionais.
generate_cv.php: Script backend que processa os dados do formulário e gera o currículo.
Tecnologias Utilizadas
HTML5
CSS3
JavaScript (jQuery)
PHP
Bootstrap 4.5.2
Funcionalidades
Frontend (index.html)
Formulário para inserção de dados pessoais, formação acadêmica, habilidades e experiências profissionais.
Botão para adicionar mais campos de experiência.
Cálculo automático da idade com base na data de nascimento fornecida.
Estilos (styles.css)
Estilização dos componentes do formulário.
Layout responsivo utilizando Bootstrap.
Scripts (app.js)
Adiciona dinamicamente campos para formação acadêmica, habilidades e experiências profissionais.
Limita o número de campos dinâmicos para evitar excesso de informações.
Backend (generate_cv.php)
Processa os dados enviados pelo formulário.
Gera um currículo com base nas informações fornecidas.
Como Usar
Clone este repositório para o seu ambiente local.
Certifique-se de ter um servidor web local (como XAMPP, WAMP ou similar) configurado para rodar o PHP.
Coloque os arquivos do projeto no diretório raiz do seu servidor web.
Abra o navegador e navegue até http://localhost/{seu-diretorio}/index.html.
Preencha o formulário com suas informações.
Clique em "Gerar Currículo" para criar e baixar o seu currículo.
Estrutura do Formulário
O formulário contém os seguintes campos:

Nome
Data de Nascimento (com cálculo automático da idade)
Endereço
Telefone
Email
Objetivo Profissional
Formação Acadêmica
Experiências Profissionais (com opção de adicionar mais campos dinamicamente)

E por fim um botão para salvar o cúrriculo em PDF.
