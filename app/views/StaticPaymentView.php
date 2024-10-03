<?php
$isDemo = false;
$data_qrcode = '';

if (isset($data['demoData'][0]['demo']['attPixKey'])) {
    $isDemo = true;
}
if (isset($data[1]['payload'])) {
    $data_qrcode = $data[1]['payload'];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Página com Cards</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h2>
                        Payment Project
                    </h2>
                    <br>
                    <p>
                        O PIX é um sistema de pagamentos instantâneos criado pelo Banco Central do Brasil, que permite a realização de transferências e pagamentos de forma rápida, segura e eficiente.
                    </p>
                    <p>
                        Lançado em novembro de 2020, o PIX revolucionou a forma como os brasileiros realizam transações financeiras.
                    </p>
                    <p>
                        Para gerar QRCode PIX estático. Preencher os dados no formulário e clicar em Gerar QRCode.
                    </p>
                    <br>
                    <p>
                        <a class="btn btn-primary btn-large" href="http://localhost/">Ver Outro Projeto</a>
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        
                        <form action="StaticQRCode" method="post">

                            <div class="form-group">
                                <label for="attPixKey">
                                    Chave PIX
                                </label>
                                <input type="text" class="form-control" id="attPixKey" name="attPixKey" autofocus value="<?php echo $isDemo === true ? $data['demoData'][0]['demo']['attPixKey'] : ''; ?>">
                            </div>

                            <div class="form-group">
                                <label for="attDescription">
                                    Breve Descrição
                                </label>
                                <input type="text" class="form-control" id="attDescription" name="attDescription" value="<?php echo $isDemo === true ? $data['demoData'][0]['demo']['attDescription'] : ''; ?>">
                            </div>

                            <div class="form-group">
                                <label for="attMerchantName">
                                    Nome (Merchant)
                                </label>
                                <input type="text" class="form-control" id="attMerchantName" name="attMerchantName" value="<?php echo $isDemo === true ? $data['demoData'][0]['demo']['attMerchantName'] : ''; ?>">
                            </div>

                            <div class="form-group">
                                <label for="attMerchantCity">
                                    Cidade (Merchant)
                                </label>
                                <input type="text" class="form-control" id="attMerchantCity" name="attMerchantCity" value="<?php echo $isDemo === true ? $data['demoData'][0]['demo']['attMerchantCity'] : ''; ?>">
                            </div>

                            <div class="form-group">
                                <label for="attAmount">
                                    Quantia (Valor Negociado)
                                </label>
                                <input type="text" class="form-control" id="attAmount" name="attAmount" value="<?php echo $isDemo === true ? $data['demoData'][0]['demo']['attAmount'] : '0.00'; ?>">
                            </div>

                            <div class="form-group">
                                <label for="attTxId">
                                    Identificador (Fatura)
                                </label>
                                <input type="text" class="form-control" id="attTxId" name="attTxId" value="<?php echo $isDemo === true ? $data['demoData'][0]['demo']['attTxId'] : ''; ?>">
                            </div>

                            <button type="submit" class="btn btn-primary" name="submit">
                                Gerar QRCode
                            </button>
                            <button type="submit" class="btn btn-secondary" name="btnDemo">Demostração</button>
                            <button type="submit" class="btn btn-danger" name="btnClear">Limpar</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <?php
                        if (isset($data[2]['QrCodeImage'])) {
                            echo '<img src="data:image/png;base64, '. base64_encode($data[2]['QrCodeImage']) .'" alt="QRCode">';
                            echo '<br><div><h3>'. $data_qrcode .'</h3></div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="mb-6">
                    &nbsp;
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>