<?php

class Exercicio4Cest
{   
    public function _before(AcceptanceTester $I)
    {
    }
    /**
     * @test
     */
    public function ordemDecrescente(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio4');
        $I->see('Exercicio 4');
        $I->fillField('number1',0);
        $I->fillField('number2',0);
        $I->fillField('number3',0);
        $I->click('verificar');
        $I->see('Informe');
     
    }
}
