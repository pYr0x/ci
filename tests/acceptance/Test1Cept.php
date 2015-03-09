<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('index.php');
$I->see('Finde mich!', 'h1');

