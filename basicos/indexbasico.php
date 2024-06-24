<?php
$name = "Andres";
$isDev = true;
$age =  18;

$isOld = $age > 20;


define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');

$output = "Holaa \"$name\", con una edad de \$age $age. 😁";

const NOMBRE = 'Andres';

$outputAge = $esOld ? 'Eres viejo, lo siento' : 'Eres joven, felicidades';

$outputAgeMatch = match ($age) {
    0, 1, 2 => "Eres un bebé, $name 👶🏻",
    3, 4, 5, 6, 7, 8, 9, 10 => "Eres un niño, $name 👦🏻",
    11, 12, 13, 14, 15, 16, 17, 18 => "Eres un adolecente, $name 👦🏻",
    19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30 => "Eres un adulto joven, $name 👱🏻",
    default => "Eres un adulto, $name 👨🏻‍🦰",
};

$outputAgeMatchCompri = match (true) {
    $age < 2 => "Eres un bebé, $name 👶🏻",
    $age < 10 => "Eres un niño, $name 👦🏻",
    $age < 18 => "Eres un adolecente, $name 👦🏻",
    $age === 18 => "Eres mayor de edad, $name 👱🏻😁",
    $age < 30 => "Eres un adulto joven, $name 👱🏻",
    $age >= 40 => "Eres un adulto viejo, $name 👨🏻‍🦳",
    default => "Hueles más a madera que fruta, $name 👨🏻‍🦰",
};

$bestLanguages = ["PHP", "JavaScript", 1, 2];
$bestLanguages[] = "Java";
$bestLanguages[3] = "GO";

$person = [
    "name" => "Andres",
    "age" => 18,
    "isDev" => true,
    "languages" => ["PHP", "JavaScript"]
];

$person["name"] = "Stiven";
$person["languages"][] = "NodeJs"

?>

<ul>
    <?php foreach ($bestLanguages as $key => $languages) : ?>
        <li><?= $key . " " . $languages ?></li>
    <?php endforeach ?>
</ul>


<?php

if ($isOld) {
    echo "<h2>Eres viejo, lo siento</h2>";
} else if ($isDev) {
    echo "<h2>No eres viejo, pero eres dev. Estás jodido</h2>";
} else {
    echo "<h2>Eres joven, felicidades</h2>";
}

?>

<?php if ($isOld) : ?>
    <h2>Eres viejo, lo siento</h2>
<?php elseif ($isDev) : ?>
    <h2>No eres viejo, pero eres dev. Estás jodido</h2>
<?php else : ?>
    <h2>Eres joven, felicidades</h2>;
<?php endif; ?>

<h2><?= $outputAge ?></h2>
<h2><?= $outputAgeMatch ?></h2>
<h2><?= $outputAgeMatchCompri ?></h2>




<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">
<h1>
    <?= $output ?>
</h1>


















<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>