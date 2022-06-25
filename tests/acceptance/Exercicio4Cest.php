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
        $I->fillField('numero1',9);
        $I->fillField('numero2',9);
        $I->fillField('numero3',9);
        $I->click('verificar');
        $I->see('Informe numeros diferentes');

        $I->amOnPage('/exercicio4');
        $I->see('Exercicio 4');
        $I->fillField('numero1',12);
        $I->fillField('numero2',25);
        $I->fillField('numero3',13);
        $I->click('verificar');
        $I->see('Em ordem decrescente: 25, 13, 12');

        
    }
}
