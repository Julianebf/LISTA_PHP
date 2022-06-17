<?php

class Exercicio6Cest
{
    /**
     * @test
     */

    public function mesCorespondete(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio6');
        $I->see('Exercicio 6');
        $I->fillField('valor','1');
        $I->click('verificar');    
        $I->see('Janeiro');

        $I->amOnPage('/exercicio6');
        $I->see('Exercicio 6');
        $I->fillField('valor','2');
        $I->click('verificar');    
        $I->see('Fevereiro');

        $I->amOnPage('/exercicio6');
        $I->see('Exercicio 6');
        $I->fillField('valor','3');
        $I->click('verificar');    
        $I->see('Março');

        $I->amOnPage('/exercicio6');
        $I->see('Exercicio 6');
        $I->fillField('valor','4');
        $I->click('verificar');    
        $I->see('Abril');

        $I->amOnPage('/exercicio6');
        $I->see('Exercicio 6');
        $I->fillField('valor','5');
        $I->click('verificar');    
        $I->see('Maio');

        $I->amOnPage('/exercicio6');
        $I->see('Exercicio 6');
        $I->fillField('valor','6');
        $I->click('verificar');    
        $I->see('Junho');

        $I->amOnPage('/exercicio6');
        $I->see('Exercicio 6');
        $I->fillField('valor','7');
        $I->click('verificar');    
        $I->see('Jullho');

        $I->amOnPage('/exercicio6');
        $I->see('Exercicio 8');
        $I->fillField('valor','8');
        $I->click('verificar');    
        $I->see('Agosto');

        $I->amOnPage('/exercicio6');
        $I->see('Exercicio 6');
        $I->fillField('valor','9');
        $I->click('verificar');    
        $I->see('Setembro');

        $I->amOnPage('/exercicio6');
        $I->see('Exercicio 6');
        $I->fillField('valor','10');
        $I->click('verificar');    
        $I->see('Outubro');

        $I->amOnPage('/exercicio6');
        $I->see('Exercicio 6');
        $I->fillField('valor','11');
        $I->click('verificar');    
        $I->see('Novembro');

        $I->amOnPage('/exercicio6');
        $I->see('Exercicio 6');
        $I->fillField('valor','11');
        $I->click('verificar');    
        $I->see('Dezembro');
    }
}