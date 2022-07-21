<?php

class Exercicio8Cest

{
    /**
     * @test
     */


    public function quantidadeDeNumeros (AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio13');
        $I->see('Exercicio 13');
        $I->fillField('numeros','115 112 113 115 112');
        $I->click('verificar');  
        $I->see('a quantidade de numeros: 5'); 

        $I->amOnPage('/exercicio13');
        $I->see('Exercicio 13');
        $I->fillField('numeros','103 198 0 112 ');
        $I->click('verificar');  
        $I->see('ecerrando execução'); 


    }

}