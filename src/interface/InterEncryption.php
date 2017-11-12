<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHICORYCOM
 * Date: 12/11/2017
 * Time: 16:48
 */

namespace chicorycom\inter;


interface InterEncryption
{
    /**
     * @param $Str
     * @param $EnctyptageKey
     * @return mixed
     */
    public function GenerationCle(string $Str, string $EnctyptageKey);


    /**
     * @param $Str
     * @return mixed
     */
    public function Crypte(string $Str);



    /**
     * @param $Str
     * @return mixed
     */
    public function Decrypte(string $Str);
}