<?php

/**
 * abaixo segue alguns exemplos de como utilizar a função setMask
 */

//CPF
echo setMask('12345678910','###.###.###-##').'<br>';

//CEP
echo setMask('12345678','######-###').'<br>';

//TELEFONE
echo setMask('1122224444','(##) ####-####').'<br>';

//CELULAR
echo setMask('11922224444','(##) #####-####').'<br>';


/**
 * @param $value
 * @param $mask
 * @return string
 */

function setMask($value, $mask)
{
    $maskared = '';

    if (empty($value)) {
        return $maskared;
    }

    $k = 0;
    for ($i = 0; $i <= strlen($mask) - 1; $i++) {
        if ($mask[$i] == '#') {
            if (isset($value[$k]))
                $maskared .= $value[$k++];
        } else {
            if (isset($mask[$i]))
                $maskared .= $mask[$i];
        }
    }

    return $maskared;
}