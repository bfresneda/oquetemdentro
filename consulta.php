<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/css/multi-select.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.css">


    <!-- <link rel="stylesheet" href="./css/perfil.css"> -->
    <link rel="stylesheet" href="./css/consulta_v2.css">
</head>

<body>

     <?php 
        require('includes/menuperfil.php')
    ?> 
    <main>
        <section class="instrucao1">Posicione o codigo de barras na área abaixo:</section>
        <div class="leitura"></div>

        <section class="instrucao2">Digite abaixo o código de barras do produto</section>
        <section class="instrucaoMobile">Se preferir digite aqui o código de barras do produto</section>



        <form>
            <input class="codB" type="number" name="cod_barras">
            <button class="botao" type="button">Enviar</button></aside>
        </form>


        <section class="resultado">Resultado da sua busca</section>
        <article class="ingredientes1">Ingredientes de importancia comum a alérgicos:
            <div class="destaque">
                <ul>
                    <li> Ovos, </li>
                    <li> Leite, </li>
                    <li> Derivados de trigo e de aveia.</li>
                    <li>Pode conter soja, nozes, amendoim, amêndoa, avelãs, castanha-de-caju, cevada e centeio. </li>
                    <li>Contém glúten.</li>
                </ul>
            </div>
        </article>
        <article class="ingredientes2">Lista completa de ingredientes
            <div class="demais">
                <P>farinha de trigo fortificada com ferro e ácido fólico, açúcar, recheio sabor chocolate (água, açúcar, xarope de glicose, leite em pó desnatado, cacau em pó, amido modificado, polidextrose, umectantes: sorbitol e glicerina, espessante pectina,
                    conservador sorbato de potássio, acidulante ácido fosfórico e aromatizante), ovo, óleo vegetal de girassol, purê de banana, açúcar líquido invertido, farinha de aveia, sal, fibra de laranja, umectante glicerina, emulsificantes: mono
                    e diglicerídeos de ácidos graxos e ésteres de ácidos graxos com poliglicerol, aromatizante, fermentos químicos: fosfato monocálcico, pirofosfato ácido de cálcio e bicarbonato de sódio, conservadores: propionato de cálcio e ácido sórbico,
                    espessantes: goma acácia, goma xantana e goma guar e acidulante ácido cítrico. Alérgicos: contém ovos, leite, ingredientes: derivados de trigo e de aveia. Pode conter soja, nozes, amendoim, amêndoa, avelãs, castanha-de-caju, cevada
                    e centeio. Contém glúten.</P>
            </div>
        </article>


    </main>
    <footer>Precisa de um footer</footer>
</body>

</html>