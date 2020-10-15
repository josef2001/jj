<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use JOSEF;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{

public function actionDefault(){

$Josef = new JOSEF();
$Josef->setnameJosef('Josefee');

echo $Josef ->getblabla6();
echo $Josef ->getblabla7();
echo $Josef ->getblabla8();
echo $Josef ->getblabla9();
echo $Josef ->getblabla10();
var_dump($Josef);

    die;
    
    
    
    
}
}