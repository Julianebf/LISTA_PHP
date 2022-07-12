<?php

class Exercicio12FCest
{
    /**
     * @test
     */

    public function frontexercicio12 (AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio12');
        $I->see('Exercicio 12');
        $I->click('verificar');    
    }
}