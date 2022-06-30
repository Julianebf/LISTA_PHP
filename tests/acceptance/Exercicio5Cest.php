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
       $I->see('Equilatero');
 
       $I->amOnPage('/exercicio5');
       $I->see('Exercicio 5');
       $I->fillField('numero1','7');
       $I->fillField('numero2','6');
       $I->fillField('numero3','5');
       $I->click('verificar');   
       $I->see('Escaleno');
 
       $I->amOnPage('/exercicio5');
       $I->see('Exercicio 5');
       $I->fillField('numero1','5');
       $I->fillField('numero2','15');
       $I->fillField('numero3','5');
       $I->click('verificar');   
       $I->see('Isosceles');
 
   }
}
