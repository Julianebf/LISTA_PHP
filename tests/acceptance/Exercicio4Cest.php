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
        $I->see('Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes)');
        $I->fillField('number1',0);
        $I->fillField('number2',0);
        $I->fillField('number3',0);
        $I->click('verificar');
        $I->see('Informe');
     
    }
}
