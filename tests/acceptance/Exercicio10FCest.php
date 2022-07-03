<?php

class Exercicio10FCest
{
    /**
     * @test
     */

    public function frontexercicio10 (AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio10');
        $I->see('Exercicio 10');
        $I->click('verificar');    
    }
}