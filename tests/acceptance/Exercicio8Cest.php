<?php

class Exercicio8Cest

{
    /**
     * @test
     */


    public function produtoDeUmNumero (AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio8');
        $I->see('Exercicio 8');
        $I->fillField('numero','5');
        $I->click('enviar');    

    }
}