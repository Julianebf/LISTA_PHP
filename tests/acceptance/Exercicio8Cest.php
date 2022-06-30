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
        $I->see('1 2 3 4 5 = 120'); 

        $I->amOnPage('/exercicio8');
        $I->see('Exercicio 8');
        $I->fillField('numero','12');
        $I->click('enviar');  
        $I->see('1 2 3 4 5 6 7 8 9 10 11 12 = 479001600');

        $I->amOnPage('/exercicio8');
        $I->see('Exercicio 8');
        $I->fillField('numero','45');
        $I->click('enviar');  
        $I->see('1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30 31 32 33 34 35 36 37 38 39 40 41 42 43 44 45 = 1.1962222086548E+56');
    }

}