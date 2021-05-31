<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Estoque - Cadastro Produtos</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
</head>

<body>
    <?php include '../layout/menu.inc'; ?>

    <h2 style="text-align: center"> Cadastro de Produtos</h2>
    <br><br>

    <div class="container">
        <form method="POST" action="../includes/create-product.php">
            <div class="row">
                <div class="col-25">
                    <label for="nome">Nome:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="nome" id="nome" placeholder="Nome do Produto">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="barras">Barras:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="barras" name="barras" placeholder="Codigo de Barras">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label for="custo">Preço Custo:</label>
                    <input type="text" id="custo" name="custo">
                </div>
                <div class="form-group col-4">
                    <label for="preco_venda">Preço Venda:</label>
                    <input type="text" id="preco_venda" name="preco_venda">
                </div>
                <div class="form-group col-4">
                    <label for="estoque">Estoque:</label>
                    <input type="text" id="estoque" name="estoque">
                </div>
            </div>
            <div class="row pt-5">
                <input type="submit" name="save" value="Salvar">
            </div>
        </form>
    </div>


</body>

</html>
<script>
$(function() {
  $("#data_nascimento").datepicker();
});
</script>