<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Estoque - Cadastro</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

</head>

<body>
    <?php include '../layout/menu.inc'; ?>

    <h2 style="text-align: center"> Cadastro de Clientes</h2>
    <br><br>

    <div class="container">
        <form method="POST" action="../includes/create-client.php">
            <div class="row">
                <div class="col-25">
                    <label for="nome">Nome:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="nome" placeholder="Nome">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email">Email:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="email" name="email" placeholder="Email">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="endereco">Endereço:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="endereco" name="endereco" placeholder="Endereço">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="bairro">Bairro:</label>
                </div>
                <div class="col-75">
                    <input type="text" id="bairro" name="bairro" placeholder="Bairro">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label for="cep">CEP:</label>
                    <input type="text" id="cep" name="cep" placeholder="CEP">
                </div>
                <div class="form-group col-4">
                    <label for="estado">Cidade:</label>
                    <input type="text" id="cidade" name="cidade" placeholder="Cidade">
                </div>
                <div class="form-group col-4">
                    <label for="estado">Estado:</label>
                    <select name="estado">
                        <option value="" selected>Selecione um Estado</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="rg">RG:</label>
                    <input type="text" id="rg" name="rg" placeholder="RG">
                </div>
                <div class="form-group col-6">
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" placeholder="CPF">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label for="sexo">Sexo:</label>
                    <select name="sexo">
                        <option value="" selected>Selecione um Sexo</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>
                <div class="form-group col-4">
                    <label for="data_nascimento">Data Nascimento:</label>
                    <input type="text" id="data_nascimento" name="data_nascimento">
                </div>
                <div class="form-group col-4">
                    <label for="telefone">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" placeholder="Telefone">
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