<?php

class Exercicio4Cest
{  
    /**
     * @test
     */
    public function ordemDecrescente(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio4');
        $I->see('Exercicio 4');
        $I->fillField('number1','8');
        $I->fillField('number2','9');
        $I->fillField('number3','4');
        $I->click('verificar');
        $I->see('Em ordem decrescente: 9, 8,4');  
    }
}