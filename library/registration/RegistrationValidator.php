<?php




/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor. pererobit bo preg_match vertae kolichectvo
 */

/**
 * Description of reg_validador
 *
 * @author profesor
 */

//sosdatm klas z danimy i oshibkami
class RegistrationValidator {
    /*

    

    */
    public static function isValidLogin( &$login) {
        /*узнать в чом ощибка*/
        if (preg_match('|^\s*((([[:alnum:]]+[-_.]?)+[[:alnum:]]+){2,40})\s*$|', $login, $matches) == true) {
            $login = $matches[1];
            return true;
        }
        return false;
    }
public static function isValidSex( &$sex) {
            $sex = preg_replace('|[\s]+|', '', $sex);

        if (preg_match('#^\s*(male|female)\s*$#', $sex, $matches) == true) {
            $sex = $matches[1];
            return true;
        }
        return false;
    }
    public static function isValidEmail( &$email) {
        if (preg_match('|^\s*('
                        . '([[:alnum:]]+[-_.]?)+[[:alnum:]]+'
                        . '@'
                        . '(([[:alnum:]]+[-._]?[[:alnum:]]+\.)+)'
                        . '[a-zA-Z]{2,5}'
                        . ')\s*$|', $email, $matches) == true) {
            $email = $matches[1];
            return true;
        }
        return false;
    }

    public static function isValidFSLName( &$name) {

        $name = preg_replace('|[\s]{2,}|', ' ', $name);

        if (preg_match('|^\s*(([[:alpha:]]{2,}+[\s]*)+([[:alpha:]]{2,})?)\s*$|', $name, $matches) == true) {
            $name = $matches[1];
            return true;
        }
        return false;
    }

    public static function isValidAddress( &$addr) {


        $addr = preg_replace('|[\s]{2,}|', ' ', $addr);

       // if (preg_match('|^\s*(([[:alpha:]]{2,}+[\s]*)+[[:alpha:]]+)\s*$|', $addr, $matches) == true) {
            if (preg_match('|^\s*([[:alpha:]]{2,})\s*$|', $addr, $matches) == true) {
            $addr = $matches[1];
            return true;
        }
        return false;
    }
     public static function isValidDate( &$date) {


        $date = preg_replace('|[\s]{2,}|', '', $date);

        if (preg_match('#^\s*([0123]?[\d][.][012]?[\d][.](19|20)[\d]{2})\s*$#', $date, $matches) == true) {
            $date = $matches[1];
            return true;
        }
        return false;
    }

    //put your code here
}
