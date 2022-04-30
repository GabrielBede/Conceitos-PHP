<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conceitos | PHP</title>
    <link rel="stylesheet" type ="text/css" href="./css/conceitos.css">
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

<h1>PHP: Conceitos</h1>

    <div class="grid">
        <div class="grid-item">
            <img src="./img/historia.png" draggable="false">
            <p>História</p>
        </div>
        <div class="grid-item">
            <img src="./img/vantagem.png" draggable="false">
            <p>Vantagens e desvantagens</p>
        </div>
    </div>

    <div class="grid-item1">
        <img src="./img/poo.png" draggable="false">
        <p>Programação Orientada a Objetos e Estruturada</p>
    </div>
<hr>

    <div class="texto"> 
        <h2>História</h2>
                <p>O PHP como é conhecido hoje, é na verdade o sucessor para um produto chamado PHP/FI. Criado em 1994 por Rasmus Lerdof, a primeira encarnação do PHP foi um simples conjunto de binários Common Gateway Interface (CGI) escrito em linguagem de programação C.</p><br>

                <p>O PHP nasceu da necessidade do programador Rasmus implementar um script para facilitar o controle de seu currículo on-line. Esse primeiro código foi inscrito em Perl e possibilitava Rasmus interpretar alguns formulários e acompanhar as estatísticas de sua página de currículo.</p><br>

                <p>Ao longo do tempo, mais funcionalidades foram desejadas, e Rasmus reescreveu o PHP Tools, produzindo uma maior e rica implementação. Este novo modelo foi capaz de interações com Banco de Dados e mais, fornecendo uma estrutura no qual os usuários poderiam desenvolver simples e dinâmicas aplicações web, como um livros de visitas. Em Junho de 1995, Rasmus » liberou o código fonte do PHP Tools para o público, o que permitiu que desenvolvedores usassem da forma como desejassem. Isso permitiu - e encorajou - usuários a fornecerem correções para bugs no código, e em geral, aperfeiçoá-lo.</p><br>
                
                <p>Em 1997 e 1998, PHP/FI teve o apoio de milhares de usuários ao redor do mundo. Uma pesquisa Netcraft de Maio de 1998, indicou que cerca de 60.000 domínios relataram ter cabeçalhos contendo "PHP", indicando que o servidor de hospedagem de fato tinha o PHP instalado. Este número pode ser equiparado com aproximadamente 1% de todos os domínios da Internet da época.</p><br>
    </div>


<hr>

    <div class="texto"> 
        <h2>Vantagens e desvantagens</h2>
            <h3>► Vantagens do PHP:</h3>
                <p><b> Open Source -</b> A vantagem mais importante do PHP é que ele é open source e não tem custos. Freqüentemente, são baixados em qualquer lugar e prontamente disponíveis para uso em eventos de aplicativos da web.</p>
                <p><b> Sistema Operacional Diverso -</b> É independente de plataforma. Os aplicativos baseados em PHP podem ser executados em qualquer sistema operacional, como UNIX, Linux e Windows, etc. </p>
                <p><b> Facilidade de Aprendizado -</b> Tem menos curva de aprendizado, porque é simples e fácil de usar. Se um particular conhece a programação C pode facilmente funcionar em PHP. </p>
                <p><b> Biblioteca -</b> Possui suporte de biblioteca poderoso para usar vários módulos de função para representação de dados. </p>
                <p><b> Banco de Dados Acessível -</b> Os módulos de conexão de banco de dados embutidos do PHP ajudam a conectar o banco de dados facilmente a reduzir problemas e tempo para desenvolvimento de aplicativos da web e sites baseados em conteúdo. </p>
                <p><b> Flexibilidade -</b> A flexibilidade torna o PHP pronto para ser combinado de forma eficaz com muitas outras linguagens de programação para que o pacote de software possa usar a tecnologia mais eficaz para cada recurso específico. </p>

<br><br>

            <h3>► Desvantagens do PHP:</h3>
                <p><b> Segurança -</b> Não é tão seguro devido ao seu código aberto, porque os arquivos de texto ASCII geralmente estão facilmente disponíveis.</p>
                <p><b> Baixo Desempenho Online -</b> O uso de mais recursos da estrutura e ferramentas de PHP causa baixo desempenho dos aplicativos online.  </p>
                <p><b> Depuração -</b> É amplamente aceito pelos desenvolvedores que o PHP apresenta uma baixa qualidade de tratamento de erros. PHP carece de ferramentas de depuração, que são necessárias para procurar erros e avisos. PHP tem menos ferramentas de depuração em comparação com outras linguagens de programação.  </p>
                <p><b> Gerenciamento -</b> É altamente difícil de gerenciar porque não é modular competente. Ele já imita os recursos da linguagem Java. </p>
    
    </div>

<hr>
   
<div class="texto"> 
    <h2>Programação Orientada a Objetos e Estruturada </h2>
        <h3>► Programação Orientada a Objetos(POO):</h3>
            <p><b> POO -</b> Programação Orientada a Objetos (também conhecida pela sua sigla POO) é um modelo de análise, projeto e programação de software baseado na composição e interação entre diversas unidades chamadas de 'objetos'.</p>

<br><br>

        <h3>► Estruturada:</h3>
            <p><b> Estruturada -</b> Programação estruturada é uma forma de programação de computadores que preconiza que todos os programas possíveis podem ser reduzidos a apenas três estruturas: sequência, decisão e iteração (repetição), desenvolvida por Michael A. Jackson no livro "Principles of Program Design" de 1975.</p>
            <p>Como vimos no decorrer do site, a programação orientada a objetos define uma programação voltada aos conceitos de classes e herança e, em contrapartida, a programação estruturada define uma programação voltada a procedimentos e funções definidas pelo usuário.</p>
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