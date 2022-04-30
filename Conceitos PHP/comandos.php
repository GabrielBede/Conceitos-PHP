<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comandos | PHP</title>
    <link rel="stylesheet" type ="text/css" href="./css/comandos.css">
</head>
<body>
    
<div class="header">
        <a href="index.php"> <img class="imagem" src="./img/php.png"></a>
        <nav>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="comandos.php">Comandos</a></li>
                <li><a href="conceitos.php">Conceitos</a></li>
                <li><a href="#rodape">Desenvolvedores</a></li>
            </ul>
        </nav>
</div>
    
    <h1>PHP: Comandos</h1>

    <div class="grid">
        <div class="grid-item">
            <img src="./img/php4.png" draggable="false">
            <p>Tags e Comandos</p>
        </div>
        <div class="grid-item">
            <img src="./img/php5.png" draggable="false">
            <p>Tipos de variáveis</p>
        </div>
        <div class="grid-item">
            <img src="./img/xampp.png" draggable="false">
            <p>Apache</p>
        </div>
        <div class="grid-item">
            <img src="./img/ternario.png" draggable="false">
            <p>Ternário</p>
        </div>
    </div>
</div>

<hr>

    <div class="texto"> 
        <h2>Tags e Comandos</h2>
            <h3>► Echo, Isset e Empty</h3>
                <p><b>Echo:</b> É o comando que exibe na tela para o usuário.</p>

                <p><b>Isset:</b> Este comando serve para averiguar se a variável desejada existe no código.</p>

                <p><b>Empty:</b> Este comando serve para averiguar se a variável possui algum valor.</p> <br>
    
            <h3>► Delimitadores em PHP:</h3>
                <p><b>Delimitadores:</b> A forma mais comum de delimitador em PHP → "˂?php ...?˃"</p>
    </div>

<hr>

    <div class="texto"> 
        <h2>Tipos de variáveis</h2>
            <h3>► String, Interger, Decimal, Float, Double e Booleana</h3>
                <p><b>String:</b> Caracteres do tipo texto;</p>

                <p><b>Interger:</b> Número inteiro → positivo ou negativo;</p>

                <p><b>Decimal:</b> Número do tipo decimal com exatidão;</p>
                
                <p><b>Float:</b> Número do tipo decimal;</p>
                
                <p><b>Double:</b> Decimal de precisão dupla;</p>
                
                <p><b>Booleana:</b> Representa um valor verdadeiro ou falso.</p>
    </div>

<hr>
    <div class="texto"> 
        <h2>Apache</h2>
            <h3>► Apache e XAMPP</h3>
                <p><b>Apache:</b> É um programa de computador denominado servidor web. Ele é instalado em nossos servidores para que as páginas da Internet requisitadas através de um browser (Firefox, Internet Explorer, etc) sejam visualizadas por você em sua estação de trabalho;</p>

                <p><b>XAMPP:</b> É um pacote com os principais servidores de código aberto do mercado, incluindo FTP, banco de dados MySQL e Apache com suporte as linguagens PHP e Perl.</p>
    </div>

<hr>
    <div class="texto"> 
        <h2>Ternário</h2>
            <h3>► If e Else</h3>
                <p><b>If e Else:</b> Estes comandos são responsáveis pela tomada de decisão: Com ele você pode fazer condições do tipo "SE" (if) isso for verdadeiro, faça aquilo; "SE NÃO" (else), faça isso".</p>

                <p><b>Ternário:</b> Os operadores ternários funcionam como uma simplificação do If e do Else. Ele testa uma condição (o primeiro operando), se ela for verdadeira, o resultado da operação é o primeiro valor (após o ?, o segundo operando), se ela for falsa, então o resultado é o segundo valor (depois do : , o terceiro operando).</p>
                <p>Onde: If se torna <b>"?"</b> e Else se torna <b>":"</b>.</p>
    </div>


<div id="rodape">
    <footer>
    <?php echo "© Copyright - Desenvolvedores: Angel de Olveira e Gabriel Bedê" . "<br/>"; ?>
    </footer>
    </div>

    <script>
        function typeWriter(elemento) {
          const textoArray = elemento.innerHTML.split('');
          elemento.innerHTML = '';
          textoArray.forEach((letra, i) => {
            setTimeout(() => elemento.innerHTML += letra, 150 * i);
          });
        }

        const titulo = document.querySelector('h1');
        typeWriter(titulo);
      </script>
</body>
</html>