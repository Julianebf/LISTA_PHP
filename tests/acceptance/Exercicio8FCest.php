<?php

class Exercicio8FCest
{
    /**
     * @test
     */

    public function frontExercicio8 (AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio8');
        $I->see('Exercicio 8');
        $I->fillField('input type','int');
        $I->click('verificar');    
        
    }
}