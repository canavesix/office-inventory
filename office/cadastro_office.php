<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inventário</title>

	<script src="https://kit.fontawesome.com/eb55db7828.js" crossorigin="anonymous"></script>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
	rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
	crossorigin="anonymous">

	<!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
      <a class="navbar-brand" href="https://github.com/canavesix">G.C</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=""></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="">Office</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="container mt-4">
    <div class="row">
      <div class="col-sm-12 col-lg-8 col-xl-6">
        <form method="post" action="upload.php" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="arquivo" class="form-label">Selecione um arquivo Excel:</label>
            <div class="input-group">
              <input type="file" class="form-control" id="arquivo" name="arquivo">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <hr>

    <section class="form-cadastro">
      <h5>Cadastrar manualmente:</h5>

      <form action="_inserir_produto.php" method="post">
        <div class="col-sm-12 col-md-6 col-lg-5 form-group">
          <label>Programa</label>
          <input type="text" class="form-control" name="nroproduto" placeholder="Insira o número de série do equipamento." autocomplete="off">
        </div>

        <div class="col-sm-12 col-md-6 col-lg-5 form-group">
          <label for="nomeproduto">CW</label>
          <input type="text" class="form-control" id="nomeproduto" name="nomeproduto" placeholder="Insira o nome do produto" autocomplete="off" required>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-5 form-group">
          <label for="categoria">Email</label>
          <input type="text" class="form-control" name="setor" placeholder="Insira o setor de destino">
        </div>

        <div class="col-sm-12 col-md-6 col-lg-5 form-group">
            <label for="computador">Computador</label>
            <input type="number" class="form-control" name="quantidade" placeholder="Insira quantidade do produto" required>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-5 form-group">
            <label>Setor</label>
            <input type="text" class="form-control" name="setor" placeholder="Insira o setor de destino">
        </div>

        <div class="col-sm-12 col-md-6 col-lg-5 form-group">
            <label>Tipo</label>
            <input type="text" class="form-control" name="setor" placeholder="Insira o setor de destino">
        </div>

        <div class="col-sm-12 col-md-6 col-lg-5 form-group">
            <label>Centro Custo</label>
            <input type="text" class="form-control" name="setor" placeholder="Insira o setor de destino">
        </div>

        <div class="col-sm-12 col-md-6 col-lg-5 form-group">
            <label>SU</label>
            <input type="text" class="form-control" name="setor" placeholder="Insira o setor de destino">
        </div>

        <div class="col-sm-12 col-md-6 col-lg-5 form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="setor" placeholder="Insira o setor de destino">
        </div>

        <div class="col-sm-12 col-md-6 col-lg-5 form-group">
            <label>Status</label>
            <input type="text" class="form-control" name="setor" placeholder="Insira o setor de destino">
        </div>
      </form>

      <div class="row">
        <div class="col d-flex">
          <button type="submit" id="botao" class="btn btn-primary btn-submit">Cadastrar</button>
          <a href="menu.php" role="button" class="btn btn-light">Voltar</a>
        </div>
      </div>
    </section>
  </section>

<script type="text/javascript" src="js/bootstrap.js"></script>
        
</body>
</html>