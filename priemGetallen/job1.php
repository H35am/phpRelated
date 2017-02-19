<?
#Schrijf een PHP functie die een integer accepteerd als een parameter.
# De output is een gesorteerde lijst met priem getallen die kleiner zijn dan de opgegeven integer
function is_prime($iN){
    for($i=$iN >>1; $i && $iN % $i--;);
    return !$i&&$iN>1;
}

function priemCijferLijst(int $iCijferIP){

    $aLijst = array();

    for ($iTeller = 0; $iTeller <= $iCijferIP; $iTeller++){

        if (is_prime($iTeller))
            $aLijst[] = $iTeller;

    }

    return $aLijst;

}

$primeArr = priemCijferLijst(20000);

foreach ($primeArr as $prime)
    echo $prime ."<br />";

