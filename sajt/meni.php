<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Naslov sajta</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">   
    </head>

    <body>
        <div class="header col-8 centar">
            <div><img src="slike/autograph.png" alt="potpis" class="col-2"></div>
            <div>
                <ul>
                    <li><a href="index.html">Naslovna</a></li>
                    <li><a href="o_nama.html">Karijera</a></li>
                    <li><a href="meni.php">Ostalo</a></li>
                    <li><a href="kontakt.html">Kontakt</a></li>
                </ul>
            </div>
        </div>
        <div class="col-8 telo">
            <div class="naslov centar">
                <p>Singlovi</p>
                <div class="grid">
                    <div>
                        <div class="container2 rectangle">
                            <img src="slike/yt.jpg" alt="Yours Truly" class="image">
                            <div class="overlay">
                            <div class="text">The Way</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="container2 rectangle">
                            <img src="slike/my.png" alt="My Everything" class="image">
                            <div class="overlay">
                            <div class="text">Problem</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="container2 rectangle">
                            <img src="slike/dw.jpg" alt="Dangerous Woman" class="image">
                            <div class="overlay">
                            <div class="text">Dangerous Woman</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="container2 rectangle">
                            <img src="slike/sw.jpg" alt="sweetener" class="image">
                            <div class="overlay">
                            <div class="text">no tears left to cry</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="container2 rectangle">
                            <img src="slike/tun.jpg" alt="thank u next" class="image">
                            <div class="overlay">
                            <div class="text">thank u next</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="container2 rectangle">
                            <img src="slike/pos.jpg" alt="positions" class="image">
                            <div class="overlay">
                            <div class="text">positions</div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="naslov centar">
                <p>Bitne uloge</p>
            </div>
            <div class="container3 rectangle">
                <img src="slike/v.jpg" alt="Victorious" class="image">
                <div class="overlay">
                  <div class="text">Cat Valentine</div>
                </div>
              </div><div class="container3 rectangle">
                <img src="slike/sc.jpg" alt="Sam And Cat" class="image">
                <div class="overlay">
                  <div class="text">Cat Valentine</div>
                </div>
              </div><div class="container3 rectangle">
                <img src="slike/sq.jpg" alt="Scream Queens" class="image">
                <div class="overlay">
                  <div class="text">Sonya Herfmann</div>
                </div>
            </div>
            <br><br>
        </div>

            <div class="naslov centar">
                <p>Parfemi</p>
                <div class="grid">


                    <?php

                        $lista_parfema = json_decode(file_get_contents("parfemi.json"));

                        foreach($lista_parfema as $parfem)
                        {
                            $parfem = (array)$parfem;
                            
                            echo '<div>';
                            echo '<div class="container2 rectangle">';
                            echo '<img src="slike/'.$parfem['slika'].'" alt="'.$parfem['ime'].'" class="image">';
                            echo '<div class="overlay">';
                            echo '<div class="text">'.$parfem['ime'].'<br>'.$parfem['cena'].'$</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';

                        }

                    ?>
            </div>
        </div>

    </body>
</html>