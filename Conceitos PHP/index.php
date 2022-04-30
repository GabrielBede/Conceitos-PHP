<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" type ="text/css" href="./css/style.css">
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
        <h1>PHP: O que você precisa saber</h1>

        <div class="grid">
                <div class="grid-item">
                        <img src="./img/php1.png" draggable="false">
                        <p>Funções</p>
                </div>
                <div class="grid-item">
                    <img src="./img/php2.png" draggable="false">
                    <p>Onde se aplica</p>
                </div>
                <div class="grid-item">
                    <img src="./img/php3.png" draggable="false">
                    <p>Profissional e Empresas</p>
                </div>
            </div>
        </div>

            <!--Funções do PHP-->
                <hr>
            <div class="texto"> 
        <h2>Funções do PHP</h2>
        <p>PHP é uma linguagem de script embutida no HTML. Muito da sua sintaxe é emprestada de C, Java e Perl com algumas características específicas do PHP adicionadas. O objetivo da linguagem é permitir que desenvolvedores web escrevam páginas geradas dinamicamente de forma rápida. Ou seja, você pode chamar quantas vezes forem necessárias a função. Você pode passar zero ou mais parâmetros para uma função, e poderá retornar apenas um valor.</p>
        </div>  

            <!--Onde se aplica-->
                <hr>
            <div class="texto"> 
        <h2>Onde se aplica</h2>
        <p>O PHP pode ser utilizado na maioria dos sistemas operacionais. Também tem suporte à maioria dos servidores web atualmente. Isso inclui o Apache, o IIS e muitos outros.</p>
        </div> 

            <!--Profissional e Empresas-->
                <hr>
            <div class="texto"> 
        <h2>Profissional e Empresas</h2>
        <p>O programador PHP é responsável pelo desenvolvimento de programas que utilizam banco de dados e procuram uma interação com o usuário. Realiza correções em sistemas para atender às necessidades dos usuários. Desenvolve trabalhos de montagem, depuração e testes de programas já desenvolvidos.
O Programador PHP tem seu lugar garantido no mercado, claro, desde que ele esteja em constante aprendizado e acompanhando as mudanças de um mercado em constante evolução.<br><br></p>
        <p>No cargo de Programador PHP se inicia ganhando R$ 1.714,00 de salário e pode vir a ganhar até R$ 3.900,00. A média salarial para Programador PHP no Brasil é de R$ 2.360,00. A formação mais comum é de Graduação em Sistemas de Informação (Análise de Sistemas).<br><br></p>
        
        <p>O PHP é usado por 78,9% de todos os websites que possuem uma linguagem de programação pelo lado do servidor reconhecida. Dessa forma, os sites mais famosos que utilizam da linguagem PHP são:<br><br></p>
        <p>- Facebook.com<br></p>
        <p>- Wikipedia.org<br></p>
        <p>- Zoom.us<br></p>
        <p>- Microsoft.com<br></p>
        <p>- Canva.com<br></p>

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