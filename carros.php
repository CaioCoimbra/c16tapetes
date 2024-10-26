<?php 
$modelo = $_GET['modelo'];

function pegarMarcaPeloModelo($modelo) {
    if ($modelo >= 0 && $modelo < 8) {
        return 1;
    } elseif ($modelo >= 8 && $modelo < 16) {
        return 2;
    } elseif ($modelo >= 16 && $modelo < 22) {
        return 3;
    } elseif ($modelo >= 22 && $modelo < 24) {
        return 4;
    } elseif ($modelo >= 24 && $modelo < 30) {
        return 5;
    } elseif ($modelo >= 30 && $modelo < 33) {
        return 6;
    } elseif ($modelo >= 33 && $modelo < 38) {
        return 7;
    } elseif ($modelo >= 38 && $modelo < 41) {
        return 8;
    } elseif ($modelo >= 41 && $modelo < 44) {
        return 9;
    } elseif ($modelo >= 44 && $modelo < 51) {
        return 10;
    } elseif ($modelo >= 51) {
        return 11;
    } 
    return null;
}


$marca = pegarMarcaPeloModelo($modelo);



switch ($marca) {
    case 1:
        $numeroCarros = 8;
        $marcaCarros = "Volkswagen";
        $modeloCarros = ["Gol", "Golf", "Jetta - 2019 a 2021", "Polo Beats/Highline", "Polo MSI/Confortaline", "Up", "Virtus MSI/Confortaline", "Virtus TSI/Beats/Highline"];
        $idCarros = 0;
        break;
    case 2:
        $numeroCarros = 8;
        $marcaCarros = "Fiat";
        $modeloCarros = ["Argo", "Cronos", "Grand Siena", "Mobi", "Palio Fire", "Pulse", "Punto", "Uno Vivace"];
        $idCarros = 8;
        break;
    case 3:
        $numeroCarros = 6;
        $marcaCarros = "Honda";
        $modeloCarros = ["City", "Civic", "Fit", "HR-V", "New City", "WR-V"];
        $idCarros = 16;
        break;
    case 4:
        $numeroCarros = 2;
        $marcaCarros = "Nissan";
        $modeloCarros = ["Sentra", "Versa"];
        $idCarros = 22;
        break;
    case 5:
        $numeroCarros = 6;
        $marcaCarros = "Chevrolet";
        $modeloCarros = ["Captiva", "Colbat", "Onix", "Onix Plus", "Prisma", "Spin"];
        $idCarros = 24;
        break;
    case 6:
        $numeroCarros = 3;
        $marcaCarros = "Ford";
        $modeloCarros = ["Ka", "Ka Sedan +", "New Fiesta"];
        $idCarros = 30;
        break;
    case 7:
        $numeroCarros = 5;
        $marcaCarros = "Renault";
        $modeloCarros = ["Captur", "Duster", "Kwid", "Logan", "Sandero"];
        $idCarros = 33;
        break;
    case 8:
        $numeroCarros = 3;
        $marcaCarros = "Jeep";
        $modeloCarros = ["Commander", "Compass", "Renegade"];
        $idCarros = 38;
        break;
    case 9:
        $numeroCarros = 3;
        $marcaCarros = "Hyundai";
        $modeloCarros = ["Creta", "HB20", "HB20S"];
        $idCarros = 41;
        break;
    case 10:
        $numeroCarros = 7;
        $marcaCarros = "Toyota";
        $modeloCarros = ["Corolla", "Etios Hatch", "Etios Sedan", "SW4 - 5 lugares", "SW4 - 7 lugares", "Yaris Hatch", "Yaris Sedan"];
        $idCarros = 44;
        break;
    case 11:
        $numeroCarros = 1;
        $marcaCarros = "Chery";
        $modeloCarros = ["Tiggo 7"];
        $idCarros = 51;
        break;
};




?>

<!DOCTYPE html>
<html lang="pt-br">
<?php 
    require 'partes/head.php';
?>
<body>
    <?php 
        require 'partes/header.php';
        require 'partes/nav.php';
    ?>
    <main>
        <?php 

        $carroMin = strtolower($marcaCarros);
        $foto = 'img/carros/'.$carroMin.'/'.($modelo + 1).'.jpg';
        $logo = 'img/carbrands/'.$carroMin.'.svg';


        echo '        
        <div id="main__carros">
            <div id="main__carros--carro">
                <div id="main__carros--logo">
                    <img src="'.$logo.'" alt="" height="35px" id="main__carros--img">
                    <h1 class="main__carros--titulo" id="main__titulo--marca">'.$marcaCarros.'</h1>
                </div>
                <div><img src="'.$foto.'" alt="" id="main__carros--model"></div>
                <h2 class="main__carros--titulo" id="main__titulo-carro">'.$modeloCarros[$modelo - $idCarros] .'</h2>
                <p id="main__carros--paragrafo">Bandeja aplicada somente na base principal do porta malas. Emborrachado antiderrapante copiado do site da probag</p>
            </div>
            <div id="main__carros--tapetes">
                <img src="00000206.jpg" alt="" id="main__tapete--img">
            </div>
        </div>
        <div id="main__preco">
            <div id="main__preco--frete" class="main__preco--bloco">
                <h1 id="main__preco--titulo">R$ 195,00</h1>
                <p id="main__titulo--cep">CEP</p>
                <div>
                    <input type="tel" id="main__input--cep" maxlength="10">
                    <input type="submit" value="OK" id="main__button--cep">
                    <script>
                        document.getElementById(\'main__input--cep\').addEventListener(\'input\', function (e) {
                        let input = e.target.value;
                        input = input.replace(/\D/g, \'\');
                        if (input.length > 2) {
                            input = input.slice(0, 2) + \'.\' + input.slice(2);
                        }
                        if (input.length > 6) {
                            input = input.slice(0, 6) + \'-\' + input.slice(6);
                        }
                        e.target.value = input;
                        });
                    </script>
                </div>
            </div>
            <div id="main__preco--total" class="main__preco--bloco">
                <div>Produto: <strong>R$195,00</strong></div>
                <div>Frete:</div>
                <div>Total:</div> 
            </div>
            <div id="main__preco--comprar" class="main__preco--bloco">
                <input type="submit" value="Comprar" id="main__preco--butao">
            </div>
        </div>';
        
        
        ?>
        <div id="main__button--block">
            <button onclick="history.back()" id="main__button--voltar">Voltar</button>
        </div>
    </main>
    <?php 
        require 'partes/footer.php';
    ?>
</body>
</html>