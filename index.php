<?php

error_reporting(0);



function multiexplode($delimiters, $string) {
    $one = str_replace($delimiters, $delimiters[0], $string);
    $two = explode($delimiters[0], $one);
    return $two;
}
$remetente = $_GET['rem'];
$cep = multiexplode(array(":", "|", ""), $remetente)[0];
$Empresa = multiexplode(array(":", "|", ""), $remetente)[1];
$Empresa2 = multiexplode(array(":", "|", ""), $remetente)[2];
$Endereco = multiexplode(array(":", "|", ""), $remetente)[3];
$Num = multiexplode(array(":", "|", ""), $remetente)[4];
$Complemento = multiexplode(array(":", "|", ""), $remetente)[5];
$Bairro = multiexplode(array(":", "|", ""), $remetente)[6];
$Cidade = multiexplode(array(":", "|", ""), $remetente)[7];
$Uf = multiexplode(array(":", "|", ""), $remetente)[8];
$Tell = multiexplode(array(":", "|", ""), $remetente)[9];

$Destinatario = $_GET['des'];

$DesCep = multiexplode(array(":", "|", ""), $Destinatario)[0];
$Destinatario1 = multiexplode(array(":", "|", ""), $Destinatario)[1];
$Destinatario2 = multiexplode(array(":", "|", ""), $Destinatario)[2];
$DesEndereco = multiexplode(array(":", "|", ""), $Destinatario)[3];
$DesNum = multiexplode(array(":", "|", ""), $Destinatario)[4];
$DesComplemento = multiexplode(array(":", "|", ""), $Destinatario)[5];
$DesBairro = multiexplode(array(":", "|", ""), $Destinatario)[6];
$DesCidade = multiexplode(array(":", "|", ""), $Destinatario)[7];
$DesUf = multiexplode(array(":", "|", ""), $Destinatario)[8];
$DesTell = multiexplode(array(":", "|", ""), $Destinatario)[9];
$Descricao = multiexplode(array(":", "|", ""), $Destinatario)[10];

$msg_real = str_replace(" ","+", $msg);
function getStr2($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}
$USERAGENTSTRINGS = array( "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36", "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.1 Safari/537.36", "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.0 Safari/537.36", "Mozilla/5.0 (Windows NT 6.3; rv:36.0) Gecko/20100101 Firefox/36.0","Mozilla/5.0 (X11; OpenBSD amd64; rv:28.0) Gecko/20100101 Firefox/28.0");
    $USERAGENTSTRINGS = $USERAGENTSTRINGS[rand(0, sizeof($USERAGENTSTRINGS) - 1)];
 $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'http://www2.correios.com.br/enderecador/encomendas/default.cfm');
            curl_setopt($ch, CURLOPT_HEADER, 1);
            curl_setopt($ch, CURLOPT_USERAGENT, $USERAGENTSTRINGS); // RADOM DOS NAVEGADORES
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
                'Connection: Keep-Alive',
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
                'Referer: http://www2.correios.com.br/enderecador/encomendas/default.cfm?to=4&tipoImpressao=1&tipo_cep_1=2&cep_1='.$cep.'&cep_teste_1='.$cep.'&nome_1='.$Empresa.'&empresa_1='.$Empresa2.'&endereco_1='.$Endereco.'&numero_1='.$Num.'&complemento_1='.$Complemento.'&bairro_1='.$Bairro.'&cidade_1='.$Cidade.'&uf_1='.$Uf.'&selUf_1='.$Uf.'&telefone_1='.$Tell.'&desTipo_cep_1=2&desCep_teste_1='.$DesCep.'&desCep_1='.$DesCep.'&desNome_1='.$Destinatario1.'&desEmpresa_1='.$Destinatario2.'&desEndereco_1='.$DesEndereco.'&desNumero_1='.$DesNum.'&desComplemento_1='.$DesComplemento.'&desBairro_1='.$DesBairro.'&desCidade_1='.$DesCidade.'&desUf_1='.$DesUf.'&selDesUf_1='.$DesUf.'&desTelefone_1='.$DesTell.'&desDC_1='.$Descricao.'&tipo_cep_2=&cep_2=&cep_teste_2=&nome_2=&empresa_2=&endereco_2=&numero_2=&complemento_2=&bairro_2=&cidade_2=&uf_2=&selUf_2=&telefone_2=&desTipo_cep_2=&desCep_teste_2=&desCep_2=&desNome_2=&desEmpresa_2=&desEndereco_2=&desNumero_2=&desComplemento_2=&desBairro_2=&desCidade_2=&desUf_2=&selDesUf_2=&desTelefone_2=&desDC_2=%09%09%09%09%09%09%0D%0A%09%09%09%09%09%09%0D%0A%09%09%09%09%09%09&tipo_cep_3=&cep_3=&cep_teste_3=&nome_3=&empresa_3=&endereco_3=&numero_3=&complemento_3=&bairro_3=&cidade_3=&uf_3=&selUf_3=&telefone_3=&desTipo_cep_3=&desCep_teste_3=&desCep_3=&desNome_3=&desEmpresa_3=&desEndereco_3=&desNumero_3=&desComplemento_3=&desBairro_3=&desCidade_3=&desUf_3=&selDesUf_3=&desTelefone_3=&desDC_3=%09%09%09%09%09%09%0D%0A%09%09%09%09%09%09%0D%0A%09%09%09%09%09%09&tipo_cep_4=&cep_4=&cep_teste_4=&nome_4=&empresa_4=&endereco_4=&numero_4=&complemento_4=&bairro_4=&cidade_4=&uf_4=&selUf_4=&telefone_4=&desTipo_cep_4=&desCep_teste_4=&desCep_4=&desNome_4=&desEmpresa_4=&desEndereco_4=&desNumero_4=&desComplemento_4=&desBairro_4=&desCidade_4=&desUf_4=&selDesUf_4=&desTelefone_4=&desDC_4=%09%09%09%09%09%09%0D%0A%09%09%09%09%09%09%0D%0A%09%09%',
            ));
            curl_setopt($ch, CURLOPT_COOKIEJAR, '/ajaxfullusd1.txt');
            curl_setopt($ch, CURLOPT_COOKIEFILE, '/ajaxfullusd1.txt');
            curl_setopt($ch, CURLOPT_COOKIESESSION, true);
            curl_setopt($ch, CURLOPT_VERBOSE, 1);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, 'to=4&tipoImpressao=1&tipo_cep_1=2&cep_1='.$cep.'&cep_teste_1='.$cep.'&nome_1='.$Empresa.'&empresa_1='.$Empresa2.'&endereco_1='.$Endereco.'&numero_1='.$Num.'&complemento_1='.$Complemento.'&bairro_1='.$Bairro.'&cidade_1='.$Cidade.'&uf_1='.$Uf.'&selUf_1='.$Uf.'&telefone_1='.$Tell.'&desTipo_cep_1=2&desCep_teste_1='.$DesCep.'&desCep_1='.$DesCep.'&desNome_1='.$Destinatario1.'&desEmpresa_1='.$Destinatario2.'&desEndereco_1='.$DesEndereco.'&desNumero_1='.$DesNum.'&desComplemento_1='.$DesComplemento.'&desBairro_1='.$DesBairro.'&desCidade_1='.$DesCidade.'&desUf_1='.$DesUf.'&selDesUf_1='.$DesUf.'&desTelefone_1='.$DesTell.'&desDC_1='.$Descricao.'&tipo_cep_2=&cep_2=&cep_teste_2=&nome_2=&empresa_2=&endereco_2=&numero_2=&complemento_2=&bairro_2=&cidade_2=&uf_2=&selUf_2=&telefone_2=&desTipo_cep_2=&desCep_teste_2=&desCep_2=&desNome_2=&desEmpresa_2=&desEndereco_2=&desNumero_2=&desComplemento_2=&desBairro_2=&desCidade_2=&desUf_2=&selDesUf_2=&desTelefone_2=&desDC_2=%09%09%09%09%09%09%0D%0A%09%09%09%09%09%09%0D%0A%09%09%09%09%09%09&tipo_cep_3=&cep_3=&cep_teste_3=&nome_3=&empresa_3=&endereco_3=&numero_3=&complemento_3=&bairro_3=&cidade_3=&uf_3=&selUf_3=&telefone_3=&desTipo_cep_3=&desCep_teste_3=&desCep_3=&desNome_3=&desEmpresa_3=&desEndereco_3=&desNumero_3=&desComplemento_3=&desBairro_3=&desCidade_3=&desUf_3=&selDesUf_3=&desTelefone_3=&desDC_3=%09%09%09%09%09%09%0D%0A%09%09%09%09%09%09%0D%0A%09%09%09%09%09%09&tipo_cep_4=&cep_4=&cep_teste_4=&nome_4=&empresa_4=&endereco_4=&numero_4=&complemento_4=&bairro_4=&cidade_4=&uf_4=&selUf_4=&telefone_4=&desTipo_cep_4=&desCep_teste_4=&desCep_4=&desNome_4=&desEmpresa_4=&desEndereco_4=&desNumero_4=&desComplemento_4=&desBairro_4=&desCidade_4=&desUf_4=&selDesUf_4=&desTelefone_4=&desDC_4=%09%09%09%09%09%09%0D%0A%09%09%09%09%09%09%0D%0A%09%09%');
            
            $f1 = curl_exec($ch);

echo $f1;



?>