<?php
/**
 * Created by IntelliJ IDEA.
 * User: BAOCOM
 * Date: 12/11/2017
 * Time: 16:55
 */

namespace chicorycom;


use chicorycom\inter\InterEncryption;

class encryption implements InterEncryption
{

        private $EnctyptageKey = null;
        private $Count;
        private $Tmp = "";
        private $Str;
        protected $_Key;

    public function __construct(
        string $Cle = '$ABCDEFGHIJKLMNOPQRSTUVWXYZzcjg@@itlhopdieu1234567890fhryuqsddvcfgtrqde5%^---___@'
    )
    {
      $this->_Key = $Cle;
    }


    /**
     * @param string $Str
     * @param string $EnctyptageKey
     * @return string
     */
    public function GenerationCle(string $Str, string $EnctyptageKey): string
    {

        $this->EnctyptageKey = md5($EnctyptageKey);
        $this->Count=0;
        $this->Tmp = "";
        for ($Ctr=0;$Ctr<strlen($Str);$Ctr++)
        {
            if ($this->Count==strlen($this->EnctyptageKey))
                        $this->Count=0;
            $this->Tmp.= substr($Str,$Ctr,1) ^ substr($this->EnctyptageKey,$this->Count,1);
            $this->Count++;
        }
        return $this->Tmp;
    }


    public function Crypte(string $Str) : string
    {
        srand((double)microtime()*1000000);
        $this->EnctyptageKey = md5(rand(0,32000) );
        $this->Count=0;
        $this->Tmp = "";
        for ($Ctr=0;$Ctr<strlen($Str);$Ctr++)
        {
            if ($this->Count==strlen($this->EnctyptageKey))
                $this->Count=0;
            $this->Tmp.= substr($this->EnctyptageKey,$this->Count,1).(substr($Str,$Ctr,1) ^ substr($this->EnctyptageKey,$this->Count,1) );
            $this->Count++;
        }
        return base64_encode($this->GenerationCle($this->Tmp,$this->_Key) );
    }


    public function Decrypte(string $Str) : string
    {
        $this->Str = $this->GenerationCle(base64_decode($Str),$this->_Key);
        $this->Tmp = "";
        for ($Ctr=0;$Ctr<strlen($this->Str);$Ctr++)
        {
            $md5 = substr($this->Str,$Ctr,1);
            $Ctr++;
            $this->Tmp.= (substr($this->Str,$Ctr,1) ^ $md5);
        }
        return $this->Tmp;
    }
}