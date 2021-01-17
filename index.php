<!-- TODO TODAYREPO: php-oop-magazzinoGOAL:

Definire la classe Magazzino e la classe Prodotto nel seguente modo:

Magazzino: definire gli attributi per nome, location e prodotti contenuti (array); definire inoltre costruttore con solo nome e location obbligatori

Prodotto: definire gli attributi per nome, peso e prezzo. Generare alcune istanze di ogni classe, ai fini di test e per meglio comprendere i concetti -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        class Magazzino {  //"ricetta" magazzino
            public $nome;  //predispongo le variabili nella "ricetta"
            public $location;
            public $prodotti = [];

            public function __construct($nome, $location) {  //costruttore, usato per valorizzare quegli attributi che caratterizzano l'istanza
                $this -> nome = $nome;  //$this vuol dire "mi riferisco agli attributi sopra", nome dopo la freccia senza il $ (dopo la freccia non va mai il $) corrisponde al $nome negli attributi sopra, infine $nome si riferisce al $nome dentro il construct
                $this -> location = $location;
            }
        }

        $magazzino = new Magazzino("Duck Logistics", "Mantova"); //istanza 
        var_dump($magazzino);

        class Prodotto {
            public $nome;  
            public $peso;
            public $prezzo;

            public function __construct($nome, $peso, $prezzo) {  
                $this -> nome = $nome;  
                $this -> peso = $peso;
                $this -> prezzo = $prezzo;
            }
        }

        $prodotto = new Prodotto("Duck toy", "12g", "50 euro"); //istanza 
        var_dump($prodotto);
    ?>



</body>
</html>