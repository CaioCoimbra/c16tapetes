<?php 
$marca = $_GET['marca'];

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
        $carroNum = $idCarros + 1;
        
        echo "<h4>Selecione o Veículo</h4>";
        echo '<ul class="main__list" id="main__list--pages">';
        for ($i=0; $i < $numeroCarros; $i++) {
            $foto = 'img/carros/'.$carroMin.'/'.($carroNum++).'.jpg';
            echo 
            '
                <form action="carros.php" method="get">
                    <button type="submit" name="modelo" value="'.($i + $idCarros + 1).'" class="main__list--link">
                        <li class="main__list--item--cars">
                            <img src="'.$foto.'" alt=""  class="main__list--cars">'.($modeloCarros[$i]).'
                        </li>
                    </button>
                </form>
            ' ;
        };
        echo "</ul>";
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