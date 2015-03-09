<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('check googls title');
$I->amOnPage('/');
$I->seeInTitle('Google');

