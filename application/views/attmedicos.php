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
                    <div class="col-md-2">
                    <input type="text" name="ID" value="<?php echo $medico->ID ?>">
                        <button type="submit" class="btn btn-primary" >Alterar</button>
                    </div>
                </div>

  

           </form>

        </div>
    
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>