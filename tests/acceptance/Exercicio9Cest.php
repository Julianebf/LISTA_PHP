<?php
class Exercicio9Cest
{
  
   public function palavraSol(AcceptanceTester $I)
   {
       $I->amOnPage('/exercicio9');
       $I->see('Exercicio 9');
       $I->fillField('numero','2');
       $I->click('verificar');
       $I->see('Sol Sol');
   }
}
