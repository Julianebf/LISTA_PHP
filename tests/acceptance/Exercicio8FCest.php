<?php

class Exercicio8Cest
{
    /**
     * @test
     */

    public function frontExercicio8 (AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio8');
        $I->see('Exercicio 8');  
        $I->click('enviar');    
    }
}