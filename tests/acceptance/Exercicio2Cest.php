<?php
class Exercicio2Cest
{
    public function _before(AcceptanceTester $I)
    {
    }
    public function testNumeroDivisivel(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Exercicio 2');
        $I->fillField('number','12');
        $I->click('send');
        $I->see('12 is divisible by 2!');

        $I->amOnPage('/');
        $I->see('Exercicio 2');
        $I->fillField('number','15');
        $I->click('send');
        $I->see('15 is divisible by 5!');

        $I->amOnPage('/');
        $I->see('Exercicio 2');
        $I->fillField('number','60');
        $I->click('send');
        $I->see('60 is divisible by 10, 5 and 2!');

        $I->amOnPage('/');
        $I->see('Exercicio 2');
        $I->fillField('number','3');
        $I->click('send');
        $I->see('3 nots divisible by 10 by 5 or by 2!');
    }
}
?>
