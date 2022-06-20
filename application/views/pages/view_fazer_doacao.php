<?php
if (!isset($_GET["doacao"])) {
    if (isset($_POST["chave"]) && isset($_POST["beneficiario"]) && isset($_POST["cidade"])) {
        $chave_pix = strtolower($_POST["chave"]);
        $beneficiario_pix = $_POST["beneficiario"];
        $cidade_pix = $_POST["cidade"];
        if (isset($_POST["descricao"])) {
            $descricao = $_POST["descricao"];
        } else {
            $descricao = '';
        }
        if ((!isset($_POST["identificador"])) || (empty($_POST["identificador"]))) {
            $identificador = "***";
        } else {
            /*
         Atenção: Quando informado pelo recebedor, cada identificador deve ser único (ex.: UUID).
         Os identificadores são usados para a facilitar a conciliação da transação. Na auséncia do
         identificador recomendável o uso de três astericos: ***
         O identificador é limitado a 25 caracteres.
         */
            $identificador = $_POST["identificador"];
            if (strlen($identificador) > 25) {
                $identificador = substr($identificador, 0, 25);
            }
        }
        $gerar_qrcode = true;
    } else {
        $cidade_pix = "SAO PAULO";
        $gerar_qrcode = false;
    }
} else {
    $chave_pix = "42a57095-84f3-4a42-b9fb-d08935c86f47";
    $beneficiario_pix = "RENATO MONTEIRO BATISTA";
    $cidade_pix = "NATAL";
    $identificador = "***";
    $descricao = "Demo phpQRCodePix";
    $gerar_qrcode = true;
}
if (is_numeric(isset($_POST["valor"]) ? $_POST["valor"] : "")) {
    $valor_pix = preg_replace("/[^0-9.]/", "", isset($_POST["valor"]) ? $_POST["valor"] : "");
} else {
    $valor_pix = "0.00";
}
?>

<script>
    function copiar() {
        var copyText = document.getElementById("brcodepix");
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */
        document.execCommand("copy");
        document.getElementById("clip_btn").innerHTML = '<i class="fas fa-clipboard-check"></i>';
    }

    function reais(v) {
        v = v.replace(/\D/g, "");
        v = v / 100;
        v = v.toFixed(2);
        return v;
    }

    function mascara(o, f) {
        v_obj = o;
        v_fun = f;
        setTimeout("execmascara()", 1);
    }

    function execmascara() {
        v_obj.value = v_fun(v_obj.value);
    }
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E6M96X7Y2Y"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-E6M96X7Y2Y');
</script>
<style>
    a {
        text-decoration: none;
    }

    p {
        text-align: center;
    }
</style>
</head>

<body>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"><?= $title ?></h1>
        </div>

        <div class="col-md-12">

            <div class="row">

                <div class="col-md-12">
                    <div class="card border-primary text-center mb-3" style="min-height: 16rem;">
                        <div class="card-header">Confirmar Doação</div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">
                                <td><?= isset($entidade["nome"]) ? $entidade["nome"] : "" ?> | <?= isset($entidade["cidade"]) ? $entidade["cidade"] : "" ?></td>
                            </h5>
                            <p class="card-text">

                            <form method="post" id="GeraQR">
                                <div class="row row-cols-lg-auto">
                                    <label for="valor" class="form-label">Valor a ser doado:</label>
                                    <input type="text" id="valor" name="valor" placeholder="Informe o valor" class="form-group" size="15" maxlength="13" value="<?= isset($valor_pix) ? $valor_pix : "" ?>" onclick="this.select();" onkeypress="mascara(this,reais)">
                                    <!-- <div id="valorHelp" class="form-text">Utilize o ponto "." como separador de decimais.</div> -->
                                </div>

                                <input type="hidden" id="entidade" name="entidade" value="<?= isset($entidade["nome"]) ? $entidade["nome"] : "" ?>">

                                <input type="hidden" id="descricao" class="form-label" name="descricao" placeholder="Descricao do pagamento" size="60" maxlength="70" value="<?= isset($_POST["descricao"]) ? $_POST["descricao"] : "" ?>" onclick="this.select();">

                                <input type="hidden" id="chave" name="chave" placeholder="Informe a chave pix" value="+5532988396781" size="50" maxlength="100" onclick="this.select();" data-toggle="tooltip" data-placement="right" title="Informe a chave pix de destino" required>

                                <input type="hidden" id="beneficiario" name="beneficiario" placeholder="Informe o nome do beneficiario" size="30" onclick="this.select();" maxlength="25" value="<?= isset($beneficiario_pix) ? $beneficiario_pix : "" ?>" required>

                                <input type="hidden" name="cidade" placeholder="Informe a cidade" onclick="this.select();" maxlength="15" value="<?= isset($cidade_pix) ? $cidade_pix : "" ?>" required>

                                <input type="hidden" id="identificador" name="identificador" placeholder="Identificador do pagamento" value="***" size="25" onclick="this.select();" value="<?= isset($_POST["identificador"]) ? $_POST["identificador"] : "" ?>">
                                <p>
                                    <button type="submit" class="btn btn-primary mt-3">Gerar QR Code <i class="fas fa-qrcode"></i></button>&nbsp;
                                </p>


                                <?php
                                if ($gerar_qrcode) {
                                    include "./application/third_party/phpqrcode/qrlib.php";
                                    include "./application/third_party/funcoes_pix.php";
                                    $px[00] = "01"; //Payload Format Indicator, Obrigatório, valor fixo: 01
                                    // Se o QR Code for para pagamento único (só puder ser utilizado uma vez), descomente a linha a seguir.
                                    //$px[01]="12"; //Se o valor 12 estiver presente, significa que o BR Code só pode ser utilizado uma vez. 
                                    $px[26][00] = "br.gov.bcb.pix"; //Indica arranjo específico; “00” (GUI) obrigatório e valor fixo: br.gov.bcb.pix
                                    $px[26][01] = $chave_pix;
                                    if (!empty($descricao)) {
                                        /* 
                                    Não é possível que a chave pix e infoAdicionais cheguem simultaneamente a seus tamanhos máximos potenciais.
                                    Conforme página 15 do Anexo I - Padrões para Iniciação do PIX  versão 1.2.006.
                                    */
                                        $tam_max_descr = 99 - (4 + 4 + 4 + 14 + strlen($chave_pix));
                                        if (strlen($descricao) > $tam_max_descr) {
                                            $descricao = substr($descricao, 0, $tam_max_descr);
                                        }
                                        $px[26][02] = $descricao;
                                    }
                                    $px[52] = "0000"; //Merchant Category Code “0000” ou MCC ISO18245
                                    $px[53] = "986"; //Moeda, “986” = BRL: real brasileiro - ISO4217
                                    if ($valor_pix > 0) {
                                        // Na versão 1.2.006 do Anexo I - Padrões para Iniciação do PIX estabelece o campo valor (54) como um campo opcional.
                                        $px[54] = $valor_pix;
                                    }
                                    $px[58] = "BR"; //“BR” – Código de país ISO3166-1 alpha 2
                                    $px[59] = $beneficiario_pix; //Nome do beneficiário/recebedor. Máximo: 25 caracteres.
                                    $px[60] = $cidade_pix; //Nome cidade onde é efetuada a transação. Máximo 15 caracteres.
                                    $px[62][05] = $identificador;
                                    //   $px[62][50][00]="BR.GOV.BCB.BRCODE"; //Payment system specific template - GUI
                                    //   $px[62][50][01]="1.2.006"; //Payment system specific template - versão
                                    $pix = montaPix($px);
                                    $pix .= "6304"; //Adiciona o campo do CRC no fim da linha do pix.
                                    $pix .= crcChecksum($pix); //Calcula o checksum CRC16 e acrescenta ao final.
                                    $linhas = round(strlen($pix) / 120) + 1;
                                ?>

                                    <h4>Linha do Pix (copia e cola):</h4>


                                    <textarea class="text-monospace w-75" id="brcodepix" rows="<?= $linhas; ?>" cols="130" onclick="copiar()"><?= $pix; ?></textarea>

                                    <div class="col md-1">
                                        <p><button type="button" id="clip_btn" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Copiar código pix" onclick="copiar()"><i class="fas fa-clipboard"></i></button></p>
                                    </div>


                                    <h4>Imagem de QRCode do Pix:</h4>

                                <?php
                                    ob_start();
                                    QRCode::png($pix, null, 'M', 5);
                                    $imageString = base64_encode(ob_get_contents());
                                    ob_end_clean();
                                    // Exibe a imagem diretamente no navegador codificada em base64.
                                    echo '<img src="data:image/png;base64,' . $imageString . '"></p>';
                                }
                                ?>


                            </form>
                            <?php if (isset($imageString)) {
                            ?>
                                <form method="post" id="RealizaDoacao" action="<?= base_url() ?>gerirdoacao/grava_doacao">

                                    <input type="hidden" id="valor" name="valor" placeholder="Informe o valor" class="form-group" size="15" maxlength="13" value="<?= isset($valor_pix) ? $valor_pix : "" ?>" onclick="this.select();" onkeypress="mascara(this,reais)">

                                    <input type="hidden" id="entidade" name="entidade" value="<?= isset($entidade["nome"]) ? $entidade["nome"] : "" ?>">

                                    <input type="hidden" id="descricao" class="form-label" name="descricao" placeholder="Descricao do pagamento" size="60" maxlength="70" value="<?= isset($_POST["descricao"]) ? $_POST["descricao"] : "" ?>" onclick="this.select();">

                                    <input type="hidden" id="chave" name="chave" placeholder="Informe a chave pix" value="+5532988396781" size="50" maxlength="100" onclick="this.select();" data-toggle="tooltip" data-placement="right" title="Informe a chave pix de destino" required>

                                    <input type="hidden" id="beneficiario" name="beneficiario" placeholder="Informe o nome do beneficiario" size="30" onclick="this.select();" maxlength="25" value="<?= isset($beneficiario_pix) ? $beneficiario_pix : "" ?>" required>

                                    <input type="hidden" name="cidade" placeholder="Informe a cidade" onclick="this.select();" maxlength="15" value="<?= isset($cidade_pix) ? $cidade_pix : "" ?>" required>

                                    <input type="hidden" id="identificador" name="identificador" placeholder="Identificador do pagamento" value="***" size="25" onclick="this.select();" value="<?= isset($_POST["identificador"]) ? $_POST["identificador"] : "" ?>">
                                    <p>
                                        <!-- <button type="submit" class="btn btn-primary mt-3">Confirmar pagamento <i class="fas fa-qrcode"></i></button>&nbsp; -->
                                        <input type="submit" class="btn btn-primary mt-3" value="Confirmar Pagamento">
                                    </p>
                                    </p>
                            <?php
                            } else {
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>
    </div>

</body>

</html>

<script>

    document.getElementById("GeraQR").addEventListener("submit", GeraQR);

    function GeraQR() {
        alert("QR Code gerado! Após efetuar o pagamento, clique em 'Confirmar Pagamento'");
        // Swal.fire({
        //     icon: 'success',
        //     title: 'Obrigado!',
        //     text: 'Recebemos sua doação! Você pode acompanhar em "Minhas Doações!"',
        //     footer: '<a href="">Minhas Doações?</a>'
        // })
    }

    document.getElementById("RealizaDoacao").addEventListener("submit", RealizaDoacao);

    function RealizaDoacao() {
        alert("Recebemos sua confirmação! Você pode acompanhar em 'Minhas Doações'");
        // Swal.fire({
        //     icon: 'success',
        //     title: 'Obrigado!',
        //     text: 'Recebemos sua doação! Você pode acompanhar em "Minhas Doações!"',
        //     footer: '<a href="">Minhas Doações?</a>'
        // })
    }
</script>