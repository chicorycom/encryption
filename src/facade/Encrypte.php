<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHICORYCOM
 * Date: 12/11/2017
 * Time: 17:40
 */

namespace chicorycom\facade;


use chicorycom\encryption;

trait Encrypte
{

    /**
     * @param string $str
     * @return string
     */
    public static function Crypt(string $str): string {
        return (new encryption())->Crypte($str);
    }


    /**
     * @param string $str
     * @return string
     */
    public static function Decrypt(string $str): string {
        return (new encryption())->Decrypte($str);
    }
}