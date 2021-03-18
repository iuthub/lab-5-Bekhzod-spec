<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>
<?php
if(empty($_REQUEST["name"]) || empty($_REQUEST["numOfCreditCard"]) || empty($_REQUEST["typeOfCreditCard"]))
{ ?>
    <h1>Sorry</h1>
    <hr />
    <p>You did not fill out the form completely. <a href="buyagrade.html">Try again?</a> </p>
<?php
} else {
?>
<h1>Thanks, sucker!</h1>

<hr />

<h2>Your information has been recorded.</h2>
<dl>
    <dt>Name</dt>
    <dd>
        <?= $_POST["name"] ?>
    </dd>

    <dt>Section</dt>
    <dd>
        <?= $_POST["section"] ?>
    </dd>

    <dt>Credit Card</dt>
    <dd>
        <?= $_POST["numOfCreditCard"] ?> (<?= $_POST["typeOfCreditCard"] ?>)
    </dd>
</dl>
<pre>
<?php
$file="./sucker.txt";
$current=file_get_contents($file);
$current.= $_POST["name"] . ";" . $_POST["section"] . ";" .$_POST["numOfCreditCard"] . ";" . $_POST["typeOfCreditCard"] . "\n";
file_put_contents($file, $current);
$text = file_get_contents($file);
echo $text;
?>
</pre>
<?php } ?>
</body>
</html>