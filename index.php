<?php
include("FormLib/includes.php");
$form = new Form("index.php", FormMethod::POST);

$br = new Element();
$br->setTag("br");
$img = new Img("https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1920px-Google_2015_logo.svg.png", "Olc Logo");
$img->addStyle(new Estyle("width", "100%"));

$link = new ALink("https://google.com", $img);
$link->addStyle(new Estyle("width", "50%"));
$link->addStyle(new Estyle("margin-left", "50%"));
$link->addStyle(new Estyle("transform", "translatex(-50%)"));

$select = new Select("select", "Select");
$select->addOption("CZ", "Česká Republika");
$select->addOption("SK", "Slovensko");
$select->addOption("PL", "Polsko");
$select->addOption("DE", "Německo");
$select->addOption("HU", "Maďarsko");
$select->addOption("AT", "Rakousko");
$select->addOption("IT", "Itálie");
$select->addOption("FR", "Francie");

$div = new Div(array(
    $link,
    new TextInput("username", "Username"),
    $br,
    new PasswordInput("password", "Password"),
    $br,
    $select,
    $br,
    new Submit("Login")
));

$div->setStyle(
    array (
        new Estyle("display", "flex"),
        new Estyle("flex-direction", "column"),
        new Estyle("width", "50%"),
        new Estyle("margin-left", "50%"),
        new Estyle("transform", "translatex(-50%)"),
        new Estyle("padding", "20px"),
        new Estyle("border", "1px solid black"),
    )
); 

$form->add($div);

echo $form;
?>

<pre>
<?php var_dump($form->validate()); ?>
</pre>



