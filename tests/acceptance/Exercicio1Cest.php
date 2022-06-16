<?php

class Exercicio1Cest
{
    public function _before(AcceptanceTester $I)
    {
    }
    public function testValidarSoma(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio1');
        $I->see('Exercicio 1');
        $I->fillField('valor1','5');
        $I->fillField('valor2','25');
        $I->click('Calcular');    
        $I->see('38');

    }    
}
?>