<?php 

namespace Drupal\module_hero\Controller;

use Drupal\Core\Controller\ControllerBase;

class HeroController extends ControllerBase{

    public function heroList(){
      $heros = [
          ['name' => "Free"],
          ['name' => "Way"],
          ['name' => "Zion"],
          ['name' => "5Dev"],
          ['name' => "Money"]
      ];
        return [
            // '#type' => 'markup',
            // '#markup' => $this->t("Hero Module Welcome")
           
            '#theme' => 'module-hero',
            '#items' => $heros,
            '#title' => $this->t("It's my title for"),
        ];
    }
}