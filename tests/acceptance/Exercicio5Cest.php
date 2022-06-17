<?php

class Exercicioa5Cest
{
    /**
     * @test
     */
    public function ladosDoTriangulo(AcceptanceTester $I)
    {
        $I->amOnPage('/exercicio5');
        $I->see('Exercicio 5');
        $I->fillField('numero1','9');
        $I->fillField('numero2','9');
        $I->fillField('numero3','9');
        $I->click('verificar');    
        $I->see('O triangulo tem todos os lados com a mesma medida, classificado como: Equilatero');

        $I->amOnPage('/exercicio5');
        $I->see('Exercicio 5');
        $I->fillField('numero1','2');
        $I->fillField('numero2','3');
        $I->fillField('numero3','5');
        $I->click('verificar');    
        $I->see("O triangulo tem todos os lados com medidas diferentes, classificado como: Escaleno");
        
        $I->amOnPage('/exercicio5');
        $I->see('Exercicio 5');
        $I->fillField('numero1','2');
        $I->fillField('numero2','2');
        $I->fillField('numero3','8');
        $I->click('verificar');    
        $I->see("O triangulo tem dois lados com a mesma medida e um lado com a medida diferente classificado como: Isosceles");
    }
}