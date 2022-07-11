<?php

class Exercicio10Cest
{
    /**
     * @test
     */

    public function frontexercicio10 (AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio10');
        $I->see('Exercicio 10');
        $I->fillField('numeros','1 2 3 4 5 6 7 8 9 10 -1 -2 -3 -4 -5 -6 -7 -8 -9 -10');
        $I->click('verificar');  
        $I->see("positivos:55 negativos:11");
    }
}