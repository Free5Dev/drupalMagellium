<?php 

namespace Drupal\mag_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class MagController extends ControllerBase{

    public function magList(){

        $liste = [
            ['name' => 'alain'],
            ['name' => 'Vlain'],
            ['name' => 'Justain'],
        ];
        // $otherListe = '';
        // foreach($liste as $list){
        //     $otherListe .= '<li>'.$list['name'].'</li>';
        // }
        return [
            // '#type' => 'markup',
            // '#markup' => '<h1>'.$this->t('Hello I\'m a Magellium Module').'</h1><ol>'.$otherListe.'</ol>'
            '#theme' => 'mag-module',
            '#items' => $liste,
            '#titre' => $this->t('It\'s title for my template twig')
        ];
    }
}