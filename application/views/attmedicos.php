<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Atualizar Cadastro de Médicos</title>
</head>
<body>

    <div class="container">
       
        <div class="row">
          
           <h1>Atualizar Cadastro do Médico</h1> 

           <form action="/medico/medico/salvar" name="form_att" method="post">

                <div class="row">
                    <div class="col-md-8">
                        <label>Nome</label>
                        <input type="text" name="NOME" value="<?php echo $medico->NOME ?>" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <label>CRM</label>
                        <input type="text" name="CRM" value="<?php echo $medico->CRM ?>" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <label>Telefone</label>
                        <input type="text" name="TEL" value="<?php echo $medico->TEL ?>" class="form-control">
                    </div>
                </div>

                <!-- Ajax da api estados -->
                <div class="row">
                        <div class="col-md-8">
                            <label>Estado</label>
                                <select type="text" name="ESTADO" value="" class="form-control" id="target">
                                    <option value=11>Rondônia </option>
                                    <option value=12>Acre</option>
                                    <option value=13>Amazonas</option>
                                    <option value=14>Roraima</option>
                                    <option value=15>Pará</option>
                                    <option value=16>Amapá</option>
                                    <option value=17>Tocantins</option>
                                    <option value=21>Maranhão</option>
                                    <option value=22>Piauí</option>
                                    <option value=23>Ceará</option>
                                    <option value=24>Rio Grande do Norte</option>
                                    <option value=25>Paraíba</option>
                                    <option value=26>Pernambuco</option>
                                    <option value=27>Alagoas</option>
                                    <option value=28>Sergipe</option>
                                    <option value=29>Bahia</option>
                                    <option value=31>Minas Gerais</option>
                                    <option value=32>Espírito Santo</option>
                                    <option value=33>Rio de Janeiro</option>
                                    <option value=35>São Paulo</option>
                                    <option value=41>Paraná</option>
                                    <option value=42>Santa Catarina</option>
                                    <option value=43>Rio Grande do Sul</option>
                                    <option value=50>Mato Grosso do Sul</option>
                                    <option value=51>Mato Grosso</option>
                                    <option value=52>Goiás</option>
                                    <option value=53>Distrito Federal</option>
                                </select>
                        </div>

                    </div>
                        <div class="row">
                            <div class="col-md-8">
                                <label>Estado</label>
                                <select name="CIDADE" id="cidade"></select>
                            </div>
                        </div>

                
                <div class="row">
                    <div class="col-md-2">
                    <input type="text" name="ID" value="<?php echo $medico->ID ?>">
                        <button type="submit" class="btn btn-primary" >Alterar</button>
                    </div>
                </div>

  

           </form>

        </div>
    
    </div>
    <script>


        $("#target").on("click", function () {
            const uf = ($(this).val());
            var url = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${uf}/municipios`;
            $.ajax({
                type: "get",
                url: url,
                data: { cidade: $("cidade").val() },
                dataType: 'json',
                contentType: "application/json; charset=utf-8",
                success: function (response) {
                    var selectbox = $('#cidade');
                    selectbox.find('option').remove();
                    $.each(response, function (i, d) {
                        $('<option>').val(d.nome).text(d.nome).appendTo(selectbox);
                    });
                }

            });
        });
    </script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>