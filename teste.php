<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/css/multi-select.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.css">


    <link rel="stylesheet" href="estiloteste.css">
</head>
<body>
            <h3>Selecione os ingredientes que você tem restrição</h3>

            <div class="inline field">
                <label>Ingredientes</label>

                <select name="skills" multiple="" class="label ui selection fluid dropdown">
                <!-- <option value="">Todos</option> -->
                <option>Farinha de trigo</option> 
                <option>crustáceos</option> 
                <option>ovos</option> 
                <option>peixes</option> 
                <option>amendoim</option> 
                <option>soja</option> 
                <option>leites de todas as espécies de animais mamíferos</option> 
                <option>amêndoa</option> 
                <option>avelãs</option> 
                <option>castanha de caju</option> 
                <option>castanha-do-brasil ou castanha-do-pará</option> 
                <option>macadâmias</option> 
                <option>nozes</option> 
                <option>pecãs</option> 
                <option>pistaches</option> 
                <option>pinoli</option> 
                <option>castanhas</option> 
                <option>látex natural</option> 
                <option> centeio</option> 
                <option>cevada</option> 
                <option> aveia e suas estirpes hibridizadas</option> 

                </select>
            </div>

            </div>

            <br><br>

            <div class="ui button">
            Limpar selecionados
            </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/js/jquery.multi-select.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.js"></script>
    <script>
        $('#my-select').multiSelect();

           /*script estilo 2*/

           $('.label.ui.dropdown')
        .dropdown();

        $('.no.label.ui.dropdown')
        .dropdown({
        useLabels: false
        });

        $('.ui.button').on('click', function () {
        $('.ui.dropdown')
            .dropdown('restore defaults')
        })


    </script>

 


</body>
</html>