<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>EStado</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		var base_url = "<?php echo base_url(); ?>"

		$(function(){
			$('#estados').change(function(){
				var id_estado = $('#estados').val();
				$.post(base_url+'index.php/ajax/cidade/getCidade', {
					Id_estado : id_estado,
				}, function(data){
					$('#cidades').html(data);
					$('#cidades').removeAttr('disabled');
				});
			})
		})
	</script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class-"form-group">
			<label for="estados" name="estados">Estados</label>
			<select id="estados" name="estados" class="form-control">
				<?php echo $options_estados; ?>
			</select>
		</div>

			<div class-"form-group">
			<label for="cidades">Cidades</label>
			<select id="cidades" name="cidades" class="form-control" disabled>
				<option> Selecione o estado acima</option>
				
			</select>
		</div>
	</div>
</div>
</body>
</html>