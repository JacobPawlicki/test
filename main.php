<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Osoba
    {
        public $imie;
        public $nazwisko;
        public function __construct()
        {
            $this->imie="Jakub";
            $this->nazwisko="Pawlicki";
        }
    }
    $os1 = new Osoba();
    echo $os1->imie." ".$os1->nazwisko;
    ?>
</body>
</html>