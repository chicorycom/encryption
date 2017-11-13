<?php
/**
 * Created by IntelliJ IDEA.
 * User: BAOCOM
 * Date: 12/11/2017
 * Time: 18:05
 */

use chicorycom\facade\Encrypte;
use PHPUnit\Framework\TestCase;


final class CrypteTest extends TestCase
{
    public function testCrypte()
    {
        $crypt = Encrypte::Crypt('contact@chicorycom.net le test des donnes');

       $this->assertEquals(
            'contact@chicorycom.net',
            Encrypte::Decrypt($crypt)
        );
    }


}