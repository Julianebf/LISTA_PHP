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
        $I->fillField('number1','3');
        $I->fillField('number2','4');
        $I->fillField('number3','5');
        $I->click('verificar');    
        $I->see('Em ordem descrecente:5,4,3');
    }
}