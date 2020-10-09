<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  
  <title>Cadastro do Veiculo</title>
  
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="wireframe.css">
</head>

<body class="">
  <div class="container">
    <div class="row">
      <div class="text-center col-md-7 mx-auto"> <img class="img-fluid d-block rounded-circle mx-auto" src="logo.jpg">
      </div>
    </div>
  </div>
  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12 order-md-1">
          <h4 class="display-5 py-3 text-center"><b>Cadastro do veiculo</b></h4>
          <form novalidate="" method="POST" class="needs-validation">
            <div class="row">
              <div class="mb-3 col-md-6" style=""> <label for="placa"><b>*Placa</b></label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback" style=""> Digite a Placa do veiculo </div>
              </div>
              <div class="mb-3 col-md-6" style=""> <label for="marca"><b>*Marca</b></label>
                <input type="text" class="form-control" id="marca" placeholder="" value="" required="">
                <div class="invalid-feedback"> Digite o Modelo do veiculo </div>
              </div>
              <div class="mb-3 col-md-6" style=""> <label for="Cor"><b>*Cor</b></label>
                <div class="input-group">
                  <input type="text" class="form-control" id="username" required="">
                  <div class="invalid-feedback" style="width: 100%;"> Digite a Cor do veiculo </div>
                </div>
              </div>
              <div class="mb-3 col-md-6" style=""> <label for="Ano"><b>*Ano</b><br></label>
                <input type="text" class="form-control" id="email" required="required">
                <div class="invalid-feedback"> Digite o Ano do veiculo </div>
              </div>
            </div>
            <div class="mb-3"> <label for="CEP">*<b>Modelo</b></label>
              <input type="text" class="form-control" id="address" required="">
              <div class="invalid-feedback"> Digite o Modelo </div>
            </div>
            <div class="mb-3"> <label for="obs">Observações:<br></label>
              <input type="text" class="form-control" id="Digite o Endereço" placeholder="Ex: endereço alternativo, numero de contado alternativo ou alguma especificação."> </div>
            <hr class="mb-4">


            <div class="form-check form-check">
              <input class="form-check-input" type="checkbox" id="serviço" value="servico"> <label class="form-check-label" for="servico">Deseja ser notificado de outros serviços a serem feitos no veiculo?</label> </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="promocao" value="promocao"> <label class="form-check-label" for="promocao">deseja receber notificações de promoção do SafeCar/Mecanica?
              </label> </div>
            <hr class="mb-4">
            <center>
              <button class="btn btn-lg btn-dark" type="submit">Cadastrar</button>
              <button class="btn btn-lg btn-dark" type="submit">Cancelar</button>
            </center>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-muted text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 my-4">
          <p class="mb-1">© 2020 SAFE-CAR.ONLINE</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="assets/js/validation.js"></script>
  
</body>

</html>