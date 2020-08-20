<?php

include 'conexao.php';

$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO fornecedor (nome_forn) values ('$fornecedor')";
$inserir = mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<div class="container" style="width:400px">
	<center>
		<h3>Fornecedor cadastrado com sucesso</h3>
		<div style="margin-top: 10px">
			<a href="adicionar_fornecedor.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
		</div>
	</center>

	<script type="text/javascript">
	$(function(){
		Swal.showLoading()
		
		setTimeout(function(){
			Swal.fire({
			icon: 'success',
			title: 'Sucesso',
			text: 'Fornecedor cadastrado com sucesso',
			allowOutsideClick: false,
			timer: 1500,
			timerProgressBar: true,
			showConfirmButton: false
		}).then((result) => {
  			window.location = 'index.php';
		}) 
		}, 1000);
	})
</script>