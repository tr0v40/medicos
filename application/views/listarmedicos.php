
    <div class="container">
        <div class="row">
            <h1><?php echo $titulo; ?></h1>

           

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-left">Médicos</th>
                        <th class="text-center">CRM</th>
                        <th class="text-right">Telefone</th>
                        <th class="text-right">Estado</th>
                        <th class="text-right">Cidade</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <?php
                    $contador = 0;
                    foreach ($medicos as $medico)
                    {
                        echo '<tr>';
                            echo'<td>'.$medico->NOME.'</td>';
                            echo '<td class="text-right">'.$medico->CRM.'</td>';
                            echo '<td class="text-right">'.$medico->TEL.'</td>';
                            echo '<td class="text-right">'.formataEstado($medico->ESTADO).'</td>';
                            echo '<td class="text-right">'.$medico->CIDADE.'</td>';
                            echo '<td class="text-center">';
                                echo '<a href="./medico/att/'.$medico->ID.'
                                "title="Editar cadastro" class="btn btn-warning">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true">
                                </span></a>';

                                echo '<a href="./medico/apagar/'.$medico->ID.'
                                "title="Apagar cadastro" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true">
                                </span></a>';


                            echo '</td>';
                        echo '</tr>';
                        
                        $contador++;
                    }

                ?>
            </table>

            <div class="row">
                    <div class="col-md-12">
                        Total de Médicos Registrados: <?php echo $contador ?>
                    </div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>