<?php

class Exercicio12Cest

{
    /**
     * @test
     */


    public function stringMaiuscula (AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio12');
        $I->see('Exercicio 12');
        $I->fillField('palavra','heitor');
        $I->click('verificar');  
        $I->see ('HEITOR
        HEITOR HEITOR
        HEITOR HEITOR HEITOR
        HEITOR HEITOR HEITOR HEITOR');
    }
}