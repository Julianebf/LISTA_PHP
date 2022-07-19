<?php

class Exercicio13FCest
{
    /**
     * @test
     */

    public function frontexercicio13 (AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio13');
        $I->see('Exercicio 13');
        $I->click('verificar');    
    }
}