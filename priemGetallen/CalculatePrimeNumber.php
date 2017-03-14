<?php

/**
 * Schrijf een PHP functie die een integer accepteerd als een parameter.
 * De output is een gesorteerde lijst met priem getallen die kleiner zijn dan de opgegeven integer
 */
class CalculatePrimeNumber
{
    private function is_prime($iN)
    {
        for ($i = $iN >> 1; $i && $iN % $i--;);
        return !$i && $iN > 1;
    }

    public function priemCijferLijst(int $iCijferIP)
    {
        $aLijst = array();
        for ($iTeller = 0; $iTeller <= $iCijferIP; $iTeller++) {
            if ($this::is_prime($iTeller))
                $aLijst[] = $iTeller;
        }

        return $aLijst;

    }
} 
