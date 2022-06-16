<?php
class Exercicio3Cest
{
    public function _before(AcceptanceTester $I)
    {
    }
    public function testVerificarInformacoes(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Exercicio 3');
        $I->fillField('nome','juliane');
        $I->selectOption('sexo','F');
        $I->fillField('idade','15');
        $I->click('verificar');
        $I->see('ACEITA');

        $I->amOnPage('/');
        $I->see('Exercicio 3');
        $I->fillField('nome','fabio');
        $I->selectOption('sexo','M');
        $I->fillField('idade','18');
        $I->click('verificar');
        $I->see('NÃO ACEITA');

        $I->amOnPage('/');
        $I->see('Exercicio 3');
        $I->fillField('nome','maria');
        $I->selectOption('sexo','F');
        $I->fillField('idade','50');
        $I->click('verificar');
        $I->see('NÃO ACEITA');
        
        
    }    
}
?>