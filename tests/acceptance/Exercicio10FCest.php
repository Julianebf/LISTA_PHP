<?php

class Exercicio10FCest
{
    /**
     * @test
     */

    public function produtoDoNumero (AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio10');
        $I->see('Exercicio 10');
        $I->fillField('input name', numeros);
        $I->click('verificar');    
    }
}