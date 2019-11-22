<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="./app/views/sidebar/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<title>bootstrap 4 sidebar</title>
</head>

<body>

	<div class="wrapper">
		<nav id="sidebar">
			<div class="sidebar-content">
				<div class="sidebar-brand">
					<a href="#">System LabS</a>
					<div id="close-sidebar">
						<i class="fa fa-times"></i>
					</div>
				</div>
				<div class="sidebar-header">
					<div class="user-pic">
						<img class="img-fluid img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="User picture">
					</div>
					<div class="user-info">
						<span class="user-name">Funcionário
							<strong>SENAI</strong>
						</span>
						<span class="user-role">Administrator</span>
						<span class="user-status">
							<i class="fa fa-circle"></i>
							<span>Online</span>
						</span>
					</div>
				</div>

				<ul class="list-unstyled components">
					<li>
						<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Cadastro</a>
						<ul class="collapse list-unstyled" id="pageSubmenu">
							<li>
								<a href="#">Empresa</a>
							</li>
							<li>
								<a href="#">Normas</a>
							</li>
							<li>
								<a href="#">RH</a>
							</li>
						</ul>
					</li>

					<li class="active">
						<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Consulta</a>
						<ul class="collapse list-unstyled" id="homeSubmenu">
							<li>
								<a href="#">Ensaios</a>
							</li>
							<li>
								<a href="#">Orçamentos</a>
							</li>
							<li>
								<a href="#">Outros</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#">Orçamento</a>
					</li>

					<li>
						<a href="#">Liberação de Pedidos</a>
					</li>
					<li>
						<a href="#">Outros</a>
					</li>
				</ul>

				<ul class="list-unstyled CTAs">
					<li>
						<a href="#" class="download">Settings</a>
					</li>
				</ul>
		</nav>



	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script>
		$(document).ready(function() {
			$('#sidebarCollapse').on('click', function() {
				$('#sidebar').toggleClass('active');
			});
		});

		$("#close-sidebar").click(function() {
			$(".sidebar").removeClass("toggled");
		});
		$("#show-sidebar").click(function() {
			$("#sidebar").addClass("toggled");
		});
	</script>





</body>

</html>