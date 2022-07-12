<?php

class Exercicio11Cest

{
    /**
     * @test
     */


    public function tabuada (AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio11');
        $I->see('Exercicio 11');
        $I->fillField('numero','6');
        $I->click('verificar');  
        $I->see('1 * 6 = 6

        2 * 6 = 12
        
        3 * 6 = 18
        
        4 * 6 = 24
        
        5 * 6 = 30
        
        6 * 6 = 36
        
        7 * 6 = 42
        
        8 * 6 = 48
        
        9 * 6 = 54
        
        10 * 6 = 60
        '); 
    }
}