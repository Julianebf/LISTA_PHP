<?php

class Exercicio4Cest
{
    /**
     * @test
     */
    public function ordemDececente(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio4');
        $I->see('Exercicio4');
        $I->fillField('number1','9');
        $I->fillField('number2','88');
        $I->fillField('number3','56');
        $I->click('Calcular');    
        $I->see('Em ordem decrescente: 88, 56, 9');

        $I->amOnPage('/exercicio4');
        $I->see('Exercicio4');
        $I->fillField('number1','7');
        $I->fillField('number2','9');
        $I->fillField('number3','110');
        $I->click('Calcular');    
        $I->see('Em ordem decrescente: 110, 9, 7');
    }
}