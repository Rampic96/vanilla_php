<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $datos["nombre"]?> <?php echo $datos["nivel"] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/lumen/bootstrap.min.css">
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="<?php echo $datos["perfil"] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $datos["nombre"]?> (Nivel : <?php echo $datos["nivel"]?>)</h5>
                        <h5 class="card-text">Clase : Guerrero</h5>
                        <table>
                            <thead>
                                <th>Atributo</th>
                                <th>Stats</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Vida</td>
                                    <td><?php echo $datos["vida"] ?></td>
                                </tr>
                                <tr>
                                    <td>Velocidad</td>
                                    <td><?php echo $datos["velocidad"] ?></td>
                                </tr>
                                <tr>
                                    <td>Daño</td>
                                    <td><?php echo $datos["dano"] ?></td>
                                </tr>
                                <tr>
                                    <td>Mana</td>
                                    <td><?php echo $datos["mana"] ?></td>
                                </tr>
                                <tr>
                                    <td>Defensa</td>
                                    <td><?php echo $datos["defensa"] ?></td>
                                </tr>
                                <tr>
                                    <td>Defensa Especial</td>
                                    <td><?php echo $datos["defensa_esp"] ?></td>
                                </tr>
                                <tr>
                                    <td>Daño Especial</td>
                                    <td><?php echo $datos["dano_esp"] ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <th>Nombre</th>
                                <th>Nivel</th>
                            </thead>
                            <tbody>
                                <?php foreach($datos["habilidades"] as $hab):?>
                                    <tr>
                                        <td><?php echo $hab["nombre"] ?></td>
                                        <td><?php echo $hab["nivel"] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <a href="index.php?nivel=<?php echo $datos["nivel"] ?>" class="btn btn-primary">Subir de Nivel</a>
                    </div>
                    <!-- www.youtube.com/watch?v=12312312&t=20s -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>