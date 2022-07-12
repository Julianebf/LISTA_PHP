<?php

class Exercicio11FCest
{
    /**
     * @test
     */

    public function frontexercicio11 (AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio11');
        $I->see('Exercicio 11');
        $I->click('verificar');    
    }
}