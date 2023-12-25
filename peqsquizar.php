<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de ebooks</title>
    <link rel="icon" href="./images/icon.jpg" sizes="16x16" type="image/X-UA-Compatible">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: orange;
            text-align: center;
            padding: 20px;
        }

        .conteudo {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
        <style>
        /* Estilos opcionais para melhorar a aparência */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        input[type="text"] {
            padding: 5px;
            width: 300px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 5px 0;
        }
        .ebook-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .ebook {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 15px;
            padding: 20px;
            width: 250px;
            transition: transform 0.3s ease-in-out;
        }

        .ebook:hover {
            transform: scale(1.05);
        }

        .ebook img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .search-input {
    box-sizing: border-box;
    width: 300px;
    padding: 10px;
    border: 2px solid #ccc;
    border-radius: 25px;
    font-size: 16px;
    background-color: white;
    background-image: url('icone-lupa.png'); /* Substitua 'icone-lupa.png' pelo caminho do seu ícone de lupa */
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding-left: 40px;
    outline: none;
    transition: border-color 0.3s;
}

/* Estilo para o campo de pesquisa quando focado */
.search-input:focus {
    border-color: red;
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
}
.button1{
    text-align: center;
    padding: 12px;
}
.button1:hover{
    background-color: silver;
    text-align: center;
    padding: 12px;
    transform: scale(1);
    border-radius: 10px;
    cursor: pointer;
}
    </style>

</head>
<body>
    <h1>Pesquisa de E-books</h1><br>
    <div>
    <a href="biblioteca.php">
    <button class="button1">
    Voltar para a biblioteca

    </button>
    </a>
    </div>
    <br><hr><br><br>
    
    <!-- Campo de pesquisa -->
    <form>
        <label for="produto">Pesquisar E-book</label><br><br>
        <input class="search-input" type="text" id="produto" onkeyup="pesquisarProduto()" placeholder="Insira o nome do e-book..."><br>
    </form>

    <!-- Lista de produtos (inicialmente oculta) -->
    <ul id="listaProdutos" style="display: none;">

<style></style>




    <li><b hidden>As Almas Do Povo Negro</b>
    <div class="ebook">
            <img src="images/img-ebook34.jpg" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">As Almas Do Povo Negro</h3>
            <p><b>Autor:</b> <b style="color: orange;"> W. E. B. Du Bois.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">129.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">História Cultural.</b></p>
            <p><b>Descrição:</b>  Este eBook explora a riqueza da cultura, a resiliência diante dos desafios e as contribuições valiosas para a sociedade. Uma jornada emocionante pela história, identidade e espiritualidade que ilumina as almas vibrantes que compõem a comunidade negra.</p>
            <a href="https://pay.hotmart.com/Q89358983T" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 57,00-Brasil</b><br><b>EUR 10,58-UE</b></a>        </div>

        </li><br>


    <li><b hidden>Dom Quixote</b>
    <div class="ebook">
            <img src="images/img-ebook33.jpg" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">Dom Quixote</h3>
            <p><b>Autor:</b> <b style="color: orange;"> Miguel de Cervantes Saavedra.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">782.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Romance Clássico.</b></p>
            <p><b>Descrição:</b> Este romance narra as aventuras de Dom Quixote, um nobre empolgado que, enlouquecido pela leitura excessiva de romances de cavalaria, decide tornar-se um cavaleiro andante e embarcar em uma série de empreendimentos heroicos. O resultado é uma jornada épica repleta de comédia, ironia e reflexões sobre a natureza da loucura e da sanidade.</p>
            <a href="https://pay.hotmart.com/L89359324L" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 150,00-Brasil</b><br><b>EUR 27,86-UE</b></a>        </div>

        </li><br>


    <li><b hidden>Um Estudo Em Scarlet</b>
    <div class="ebook">
            <img src="images/img-ebook32.jpg" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">Um Estudo Em Scarlet</h3>
            <p><b>Autor:</b> <b style="color: orange;"> Arthur Conan Doyle.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">104.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Ficção Policial.</b></p>
            <p><b>Descrição:</b> "Um Estudo em Scarlet" marca o início do gênero de detetive moderno, apresentando Sherlock Holmes e seu parceiro Dr. John Watson. A trama se desenrola com um mistério intrigante, onde Holmes usa suas habilidades dedutivas únicas para resolver crimes aparentemente insolúveis.</p>
            <a href="https://pay.hotmart.com/T89356856E" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 77,27-Brasil</b><br><b>EUR 14,35-UE</b></a>        </div>

        </li><br>


    <li><b hidden>Mulherzinhas</b>
    <div class="ebook">
            <img src="images/img-ebook27.jpg" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">Mulherzinhas</h3>
            <p><b>Autor:</b> <b style="color: orange;"> Louisa May Alcott.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">491.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Romance Clássico.</b></p>
            <p><b>Descrição:</b> "Mulherzinhas" é um romance atemporal que segue a vida das quatro irmãs March - Meg, Jo, Beth e Amy - enquanto crescem durante a Guerra Civil Americana. Cada irmã tem sua própria personalidade única, sonhos e desafios, mas juntas enfrentam as alegrias e dificuldades da vida.</p>
            <a href="https://pay.hotmart.com/U89364590G" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 104,26-Brasil</b><br><b>EUR 19,35-UE</b></a>        </div>

        </li><br>



    <li><b hidden>Vinte Anos Depois(1ªparte)</b>
    <div class="ebook">
            <img src="images/img-ebook23.jpg" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">Vinte Anos Depois(1ªparte)</h3>
            <p><b>Autor:</b> <b style="color: orange;"> Alexandre Dumas.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">138.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Ficção Histórica.</b></p>
            <p><b>Descrição:</b> "A sequência emocionante e cheia de ação de "Os Três Mosqueteiros". A trama envolve intriga política, traições, romance e duelos, oferecendo uma narrativa cativante que continua a história épica iniciada no livro anterior.</p>
            <a href="https://pay.hotmart.com/M89364784Q" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 34,96-Brasil</b><br><b>EUR 6,60-UE</b></a>        </div>

        </li><br>



        <li><b hidden>A Minha Vida</b>
        <div class="ebook">
            <img src="images/img-ebook31.jpg" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">A Minha Vida</h3>
            <p><b>Autor:</b> <b style="color: orange;"> Richard Wagner.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">353.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Autobiografia.</b></p>
            <p><b>Descrição:</b> "A Minha Vida" oferece aos leitores uma visão íntima e pessoal da jornada do autor Richard Wagner, desde os primeiros dias até os momentos significativos que moldaram sua vida. Esta obra emocionante mergulha nas experiências, desafios e triunfos, proporcionando uma narrativa envolvente que ressoa com a experiência humana.</p>
            <a href="https://pay.hotmart.com/G89364437N" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 87,42-Brasil</b><br><b>EUR 16,50-UE</b></a>        </div>

        </li><br>



    <li><b hidden>Crime E Castigo</b>
    <div class="ebook">
            <img src="images/img-ebook22.png" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">Crime E Castigo</h3>
            <p><b>Autor:</b> <b style="color: orange;">Fyodor Dostoyevsky.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">480.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">literatura clássica russa.</b></p>
            <p><b>Descrição:</b> "Crime e Castigo" explora as complexidades da psique humana, moralidade e redenção. A história é centrada em Rodion Raskólnikov, um ex-estudante que comete um assassinato e, a partir desse ato, lida com as consequências psicológicas e morais de seu crime.</p>
            <a href="https://pay.hotmart.com/U89364877T" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 116,56-Brasil</b><br><b>EUR 22,00-UE</b></a>        </div>

        </li><br>


        <li><b hidden>Quarto Com Vista</b>
        <div class="ebook">
            <img src="images/img-ebook26.jpg" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">Quarto Com Vista</h3>
            <p><b>Autor:</b> <b style="color: orange;"> E. M. Forster.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">210.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Romance Clássico.</b></p>
            <p><b>Descrição:</b> Uma jovem chamada Lucy Honeychurch, que viaja para a Itália e enfrenta dilemas sobre convenções sociais e expectativas familiares em relação ao casamento. O romance também examina temas como a busca pela verdadeira paixão e a liberdade pessoal.</p>
            <a href="https://pay.hotmart.com/M89364682C" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 52,45-Brasil</b><br><b>EUR 9,90-UE</b></a>        </div>

        </li><br>


        <li><b hidden>A Républica</b>
        <div class="ebook">
            <img src="images/img-ebook28.jpg" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">A Républica</h3>
            <p><b>Autor:</b> <b style="color: orange;"> Plato.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">540.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Filosofia Política.</b></p>
            <p><b>Descrição:</b> "A República" é um diálogo filosófico que aborda temas como justiça, política, ética e a natureza da alma. Escrito por Platão, um discípulo de Sócrates, o livro apresenta uma visão da sociedade ideal, na qual a justiça é alcançada por meio de uma estrutura política e social cuidadosamente planejada.</p>
            <a href="https://chk.eduzz.com/2197734" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 93,24-Brasil</b><br><b>EUR 17,60-UE</b></a>        </div>

        </li><br>


        <li><b hidden>O Caso Estranho</b>
        <div class="ebook">
            <img src="images/img-ebook25.png" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">O Caso Estranho</h3>
            <p><b>Autor:</b> <b style="color: orange;">Robert Louis Stevenson.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">55.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Terror.</b></p>
            <p><b>Descrição:</b> "O Caso Estranho" é uma novela gótica publicada pela primeira vez em 1886. A história gira em torno do Dr. Henry Jekyll, um médico londrino respeitável, que desenvolve uma poção que lhe permite liberar seu lado sombrio, representado pelo Sr. Edward Hyde.</p>
            <a href="https://pay.hotmart.com/V89365142F" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 11,65-Brasil</b><br><b>EUR 2,20-UE</b></a>        </div>

        </li><br>


        <li><b hidden>Grandes Expectativas</b>
        <div class="ebook">
            <img src="images/img-ebook24.jpg" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">Grandes Expectativas</h3>
            <p><b>Autor:</b> <b style="color: orange;">Charles Dickens.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">450.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Literatura Clássica.</b></p>
            <p><b>Descrição:</b> "Grandes Expectativas" conta a história de um jovem órfão chamado Pip, que tem sua vida transformada por uma série de eventos inesperados. A trama aborda temas como aspirações, classes sociais, amor não correspondido e redenção.</p>
            <a href="https://pay.hotmart.com/E89402348R" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 139,87-Brasil</b><br><b>EUR 26,40-UE</b></a>        </div>

        </li><br>



    <li><b hidden>Metamorfose</b>
    <div class="ebook">
            <img src="images/img-ebook19.jpg" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">Metamorfose</h3>
            <p><b>Autor:</b> <b style="color: orange;">Franz Kafka.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">36.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Ficção Existencialista.</b></p>
            <p><b>Descrição:</b> "A Metamorfose", obra-prima de Franz Kafka, mergulha os leitores em um mundo surreal e existencialista. A história centra-se em Gregor Samsa, um homem que acorda certa manhã transformado em um inseto gigante. Ao explorar as complexidades psicológicas de Gregor e as reações de sua família diante dessa metamorfose.</p>
            <a href="https://pay.hotmart.com/O89402542P" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 8,74-Brasil</b><br><b>EUR 1,65-UE</b></a>        </div>

        </li><br>

        <li><b hidden>O Homem Invisível</b>
        <div class="ebook">
            <img src="images/img-ebook21.jpg" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">O Homem Invisível</h3>
            <p><b>Autor:</b> <b style="color: orange;">H. G. Wells.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">130.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Ficção Científica.</b></p>
            <p><b>Descrição:</b> Em "O Homem Invisível", H.G. Wells tece uma narrativa fascinante e inovadora que mergulha nas consequências inesperadas e aterrorizantes da busca pelo desconhecido. A história segue Griffin, um cientista brilhante, mas atormentado, que descobre o segredo da invisibilidade.</p>
            <a href="https://pay.hotmart.com/D89365045C" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 29,14-Brasil</b><br><b>EUR 5,50-UE</b></a>        </div>

        </li><br>


        <li><b hidden>O Prisioneiro De Zenda</b>
        <div class="ebook">
            <img src="images/img-ebook18.jpg" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">O Prisioneiro De Zenda</h3>
            <p><b>Autor:</b> <b style="color: orange;">Anthony Hope.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">165.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Romance de Aventura.</b></p>
            <p><b>Descrição:</b> Em "O Prisioneiro de Zenda", Anthony Hope tece uma trama cativante de intriga, aventura e identidade trocada. Nesta obra-prima do romance de aventura, o leitor é transportado para o fictício reino de Ruritânia, onde um impostor assume a identidade de um rei, desencadeando uma série de eventos que mudarão o destino da nação.</p>
            <a href="https://pay.hotmart.com/S89402506S" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 49,53-Brasil</b><br><b>EUR 9,35-UE</b></a>        </div>

        </li><br>


        <li><b hidden>O Governo Invicível</b>
        <div class="ebook">
            <img src="images/img-ebook20.jpg" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">O Governo Invicível</h3>
            <p><b>Autor:</b> <b style="color: orange;"> Dan Smoot.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">144.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Thriller Político.</b></p>
            <p><b>Descrição:</b>  Em "O Governo Invisível", adentre nas sombras do poder e descubra um mundo oculto onde as linhas entre o público e o privado se desvanecem. Neste eletrizante thriller político, as engrenagens do governo movem-se discretamente, guiadas por uma força invisível que manipula, controla e dita os destinos das nações.</p>
            <a href="https://pay.hotmart.com/P89402699U" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 52,45-Brasil</b><br><b>EUR 9,90-UE</b></a>        </div>

        </li><br>


        <li><b hidden>Um Veredicto Aberto</b>
        <div class="ebook">
            <img src="images/img-ebook13.png" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">Um Veredicto Aberto</h3>
            <p><b>Autor:</b> <b style="color: orange;"> M. E. Braddon.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">135.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Ficção Legal.</b></p>
            <p><b>Descrição:</b>  Entre nos corredores do tribunal, onde verdades estão entrelaçadas com mentiras, e onde a justiça pendura delicadamente na balança. "Um Veredicto Aberto" é uma narrativa envolvente que mergulha nas complexidades do sistema legal, desvendando mistérios e explorando as nuances da verdade.</p>
            <a href="https://pay.hotmart.com/S89402742Y" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 75,76-Brasil</b><br><b>EUR 14,30-UE</b></a>        </div>

        </li><br>

        <li><b hidden>Meditações</b>
        <div class="ebook">
            <img src="images/img-ebook29.jpg" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">Meditações</h3>
            <p><b>Autor:</b> <b style="color: orange;"> Emperor of Rome Marcus Aurelius.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">98.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Estoicismo.</b></p>
            <p><b>Descrição:</b> "Meditações" é uma coleção de pensamentos, reflexões e princípios escritos por Marco Aurélio para si mesmo como um exercício pessoal de autoexame e autodisciplina. O livro oferece insights profundos sobre a natureza da vida, a ética pessoal, o dever cívico e a aceitação das realidades inevitáveis da existência.</p>
            <a href="https://pay.hotmart.com/R89402793J" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 23,31-Brasil</b><br><b>EUR 4,40-UE</b></a>        </div>

        </li><br>

        <li><b hidden>Guerra E Paz(1ªparte)</b>
        <div class="ebook">
            <img src="images/img-ebook16.png" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">Guerra E Paz(1ªparte)</h3>
            <p><b>Autor:</b> <b style="color: orange;">graf Leo Tolstói.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">180.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Filosofia Ficcional.</b></p>
            <p><b>Descrição:</b>  Embarque em uma jornada épica através da Rússia do século XIX com "Guerra e Paz", a obra-prima monumental de Leo Tolstoy. Este eBook oferece uma imersão profunda em uma narrativa que entrelaça os destinos de personagens cativantes durante um período crucial da história russa.</p>
            <a href="https://pay.hotmart.com/S89402718V" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 51,28-Brasil</b><br><b>EUR 9,68-UE</b></a>        </div>

        </li><br>

        <li><b hidden>Os Miseráveis(1ªparte)</b>
        <div class="ebook">
            <img src="images/img-ebook17.png" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">Os Miseráveis(1ªparte)</h3>
            <p><b>Autor:</b> <b style="color: orange;">Victor Hugo.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">192.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Redenção e Justiça Social.</b></p>
            <p><b>Descrição:</b>  Adentre o épico emocional de Victor Hugo com "Os Miseráveis", uma obra-prima que ecoa através dos séculos. Esta narrativa poderosa mergulha nas vidas entrelaçadas de personagens memoráveis em meio à tumultuada paisagem social da França do século XIX.</p>
            <a href="https://pay.hotmart.com/O89402664X" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 64,69-Brasil</b><br><b>EUR 12,21-UE</b></a>        </div>

        </li><br>

        <li><b hidden>Orgulho E Preconceito</b>
        <div class="ebook">
            <img src="images/img-ebook15.png" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">Orgulho E Preconceito</h3>
            <p><b>Autor:</b> <b style="color: orange;">Jane Austen.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">286.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Drama Romântico.</b></p>
            <p><b>Descrição:</b>  Prepare-se para se encantar pela obra-prima atemporal de Jane Austen, "Orgulho e Preconceito". Este eBook mergulha nos salões elegantes e nas intricadas relações sociais da Inglaterra do século XIX, oferecendo uma experiência única para os leitores.</p>
            <a href="https://pay.hotmart.com/H89402773J" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 107,23-Brasil</b><br><b>EUR 20,24-UE</b></a> </div>

        </li><br>

        <li><b hidden>Domínio Do Desenvolvimento De Softwares</b>
        <div class="ebook">
            <img src="images/img-ebook9.png" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">Domínio Do Desenvolvimento De Softwares</h3>
            <p><b>Autor:</b> <b style="color: orange;">E-books Word.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">42.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Educacional.</b></p>
            <p><b>Descrição:</b>  Este eBook é uma bússola essencial para desenvolvedores iniciantes e experientes que desejam aprimorar suas habilidades e alcançar a excelência no campo do desenvolvimento de software.</p>
            <a href="https://pay.hotmart.com/F89402897K" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 11,65-Brasil</b><br><b>EUR 2,20-UE</b></a>        </div>

        </li><br>

        <li><b hidden>O Fazer De Uma Mulher</b>
        <div class="ebook">
            <img src="images/img-ebook12.png" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">O Fazer De Uma Mulher</h3>
            <p><b>Autor:</b> <b style="color: orange;">Amy Le Feuvre.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">222.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;"> Empoderamento Feminino.</b></p>
            <p><b>Descrição:</b>  "O Fazer de uma Mulher" é mais do que um e-book; é um guia inspirador para as mulheres que buscam explorar e fortalecer seu verdadeiro eu. Em suas páginas, descubra uma jornada de autodescoberta, crescimento pessoal e empoderamento.</p>
            <a href="https://pay.hotmart.com/P89402592G" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 71,68-Brasil</b><br><b>EUR 13,53-UE</b></a>        </div>

        </li><br>

        <li><b hidden>Invasor Espacial</b>
        <div class="ebook">
            <img src="images/img-ebook11.png" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">Invasor Espacial</h3>
            <p><b>Autor:</b> <b style="color: orange;">Webber Martin.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">39.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;"> Ficção Científica.</b></p>
            <p><b>Descrição:</b>   Este e-book de ficção científica promete levar os leitores a um universo repleto de mistérios, intrigas e confrontos cósmicos que desafiam a imaginação. Prepare-se para uma experiência literária que transcende as fronteiras da Terra e mergulha nas profundezas.</p>
            <a href="https://pay.hotmart.com/I89402850W" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 32,05-Brasil</b><br><b>EUR 6,05-UE</b></a>        </div>

        </li><br>

        <li><b hidden>Marketing Digital</b>
        <div class="ebook">
            <img src="images/img-ebook10.png" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">Marketing Digital</h3>
            <p><b>Autor:</b> <b style="color: orange;">E-books Word.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">20.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Educacional.</b></p>
            <p><b>Descrição:</b>  Explore o fascinante mundo do Marketing Digital com nosso eBook abrangente, "Marketing Digital". Este guia detalhado é um companheiro indispensável para empreendedores, profissionais de marketing e qualquer pessoa que deseje dominar as complexidades do ambiente online.</p>
            <a href="https://pay.hotmart.com/C89402883R" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 5,82-Brasil</b><br><b>EUR 1,10-UE</b></a>        </div>

        </li><br>

        <li><b hidden>O Kadambari De Bana</b>
        <div class="ebook">
            <img src="images/img-ebook14.png" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">O Kadambari De Bana</h3>
            <p><b>Autor:</b> <b style="color: orange;">Bana Bhusanabhatta.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">124.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Literatura Clássica Sânscrita.</b></p>
            <p><b>Descrição:</b> Embarque em uma jornada literária única com "O Kādambarī de Bāṇa". Esta obra clássica em sânscrito, atribuída ao autor indiano Bāṇabhaṭṭa, é uma narrativa encantadora que transcende o tempo.</p>
            <a href="https://pay.hotmart.com/G89402637S" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 50,12-Brasil</b><br><b>EUR 9,46-UE</b></a>        </div>

        </li><br>


    <li><b hidden>Produtividade</b>
    <div class="ebook">
            <img src="images/img-ebook8.png" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">Produtividade</h3>
            <p><b>Autor:</b> <b style="color: orange;">E-books Word.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">28.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Auto Aperfeiçoamento.</b></p>
            <p><b>Descrição:</b>  Desvendando o Segredo da Eficiência, descubra métodos eficazes de gerenciamento de tempo, técnicas para definir metas realistas e ferramentas inovadoras para eliminar distrações.</p>
            <a href="https://pay.hotmart.com/G89402814K" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 8,74-Brasil</b><br><b>EUR 1,65-UE</b></a>        </div>

        </li><br>


    <li><b hidden>Controlo Emocional</b>
    <div class="ebook">
            <img src="images/img-ebook7.png" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">Controlo Emocional</h3>
            <p><b>Autor:</b> <b style="color: orange;">E-books Word.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">156.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Auto Aperfeiçoamento.</b></p>
            <p><b>Descrição:</b> Em "Controle Emocional", embarque em uma jornada de autodescoberta e fortalecimento emocional que transformará a maneira como você enfrenta desafios e experiências diárias. Este eBook oferece uma abordagem prática e acessível para compreender e dominar suas emoções, capacitando-o a construir relacionamentos mais saudáveis, tomar decisões ponderadas e enfrentar as adversidades com resiliência.</p>
            <a href="https://pay.hotmart.com/K89408227A" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 81,28-Brasil</b><br><b>EUR 15,09-UE</b></a>
        </div>
        </li><br>


    <li><b hidden>Como Amar O Seu Trabalho</b>
    <div class="ebook">
            <img src="images/img-ebook6.png" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">Como Amar O Seu Trabalho</h3>
            <p><b>Autor:</b> <b style="color: orange;">E-books Word.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">15.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Trabalhos E Carreiras.</b></p>
            <p><b>Descrição:</b> "Como Amar o Seu Trabalho" é um farol para aqueles que buscam não apenas uma carreira, mas uma fonte de realização e satisfação diária. Este eBook é um guia inspirador repleto de conselhos práticos e insights profundos, projetado para ajudá-lo a descobrir e cultivar a paixão e o propósito em seu percurso profissional.</p>
            <a href="https://pay.hotmart.com/J89408400Y" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 8,70-Brasil</b><br><b>EUR 1,61-UE</b></a>
        </div>
        </li><br>


    <li><b hidden>O Segredo Do Lucro Rápido</b>
    <div class="ebook">
            <img src="images/img-ebook5.png" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">O Segredo Do Lucro Rápido</h3>
            <p><b>Autor:</b> <b style="color: orange;">Edson José.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">17.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Educacional.</b></p>
            <p><b>Descrição:</b> Descubra "O Segredo do Lucro Rápido", um guia inovador que desvenda estratégias práticas para impulsionar seu sucesso financeiro de maneira rápida e eficaz. Este eBook é um mapa detalhado, projetado para orientar empreendedores, investidores e visionários a alcançar seus objetivos financeiros de maneira inteligente e estratégica.</p>
            <a href="https://pay.hotmart.com/G89408450H" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 8,70-Brasil</b><br><b>EUR 1,61-UE</b></a>
        </div>
        </li><br>


    <li><b hidden>O Óficio Do Autor</b>
    <div class="ebook">
            <img src="images/img-ebook4.png" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">O Óficio Do Autor</h3>
            <p><b>Autor:</b> <b style="color: orange;">E-books Word.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">73.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Escrita e fala.</b></p>
            <p><b>Descrição:</b> Aprenda a superar bloqueios criativos e descubra estratégias práticas para desenvolver sua voz autoral única.</p>
            <a href="https://pay.hotmart.com/K89402418F" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 34,96-Brasil</b><br><b>EUR 6,60-UE</b></a>        </div>

        </li><br>



        <li><b hidden>A Expedição</b>
        <div class="ebook">
            <img src="images/img-ebook30.jpg" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">A Expedição</h3>
            <p><b>Autor:</b> <b style="color: orange;">T. Smollett.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">15.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Ficção Clássica.</b></p>
            <p><b>Descrição:</b> "A Expedição" é um romance clássico escrito por Tobias Smollett. Publicado pela primeira vez em 1771, é uma obra de epistolografia, o que significa que a história é contada por meio de cartas escritas pelos personagens.</p>
            <a href="https://pay.hotmart.com/G89408350R" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 8,70-Brasil</b><br><b>EUR 1,61-UE</b></a>
        </div>
        </li><br>



        <li><b hidden>Tatuagem Perfeita</b>
        <div class="ebook">
            <img src="images/img-ebook3.png" alt="Capa do Ebook 1">
            <h3 style="color:burlywood;">Tatuagem Perfeita</h3>
            <p><b>Autor:</b> <b style="color: orange;">E-books Word.</b></p>
            <p><b>Idioma:</b> <b style="color: orange;">Português.</b></p>
            <p><b>Páginas:</b> <b style="color: orange;">124.</b></p>
            <p><b>Categoria:</b> <b style="color: orange;">Informativo.</b></p>
            <p><b>Descrição:</b> "Tatuagem Perfeita" é mais do que um guia; é uma fonte inspiradora para todos os entusiastas de tatuagens, desde aqueles que estão planejando sua primeira tinta até os veteranos da arte corporal. Este eBook abrangente oferece insights valiosos, dicas especializadas e inspiração para ajudar você a criar a tatuagem perfeita que expressa sua individualidade de maneira única.</p>
            <a href="https://pay.hotmart.com/U89408296X" style="text-decoration: none; color: blue" target="_blank"><b style="color: red"><br>Comprar</b> <br><b>R$ 58,06-Brasil</b><br><b>EUR 10,77-UE</b></a>
        </div>
        </li>
        
        <!-- acrescentar mais ebooks

        <li>Produto 3: Calça Jeans</li>
        
        
        <li>Produto 4: Boné</li>
        
        
        <li>Produto 5: Mochila</li>

    -->
    </ul
    >

    <script>
        // Função para realizar a pesquisa de produtos
        function pesquisarProduto() {
            var input, filtro, ul, li, textoProduto;
            input = document.getElementById("produto");
            filtro = input.value.toUpperCase();
            ul = document.getElementById("listaProdutos");
            li = ul.getElementsByTagName("li");

            var encontrou = false; // Flag para indicar se um produto correspondente foi encontrado

            if (filtro === "") {
                ul.style.display = "none"; // Oculta a lista quando o campo de pesquisa está vazio
            } else {
                for (var i = 0; i < li.length; i++) {
                    textoProduto = li[i].textContent || li[i].innerText;
                    if (textoProduto.toUpperCase().indexOf(filtro) > -1) {
                        li[i].style.display = "";
                        encontrou = true;
                    } else {
                        li[i].style.display = "none";
                    }
                }

                // Exibir ou ocultar a lista de produtos com base na flag "encontrou"
                if (encontrou) {
                    ul.style.display = "block";
                } else {
                    ul.style.display = "none";
                }
            }
        }
    </script>



</body>
</html>
