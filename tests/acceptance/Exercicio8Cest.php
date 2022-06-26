<?php

class Exercicio6Cest
{
    /**
     * @test
     */

    public function produtoDoNumero (AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio8');
        $I->see('Exercicio 8');
        $I->fillField('numero','10');
        $I->click('enviar');    
    }
}