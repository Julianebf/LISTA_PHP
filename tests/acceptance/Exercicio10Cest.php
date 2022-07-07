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
        $I->fillField('numeros','10 24 2 3 4 5 -1 -4 -9 47 3 39 2 44 7 59 3 39 45 10');
        $I->click('verificar');  
        $I->see("A soma dos numeros positivos:346 A quantidade dos numeros negativos:3");
    }
}