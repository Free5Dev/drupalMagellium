<?php

namespace Drupal\module_hero\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hero' Block.
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("Hero block"),
 * )
 */
class HeroBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $heros = [
        ['sur_name' => 'Mama', 'real_name' =>'Fatoumata' ],
        ['sur_name' => 'Sory', 'real_name' =>'Ibrahima' ],
        ['sur_name' => 'Sas', 'real_name' =>'Sekou' ],
        ['sur_name' => 'Free', 'real_name' =>'saidou' ],
        ['sur_name' => 'Lylex', 'real_name' =>'Alkaly' ],
        ['sur_name' => 'Boubex', 'real_name' =>'Aboubacar' ],
    ];

    $table = [
        '#type' =>'table',
        '#header' => [
            $this->t('sur_name'),
            $this->t('real_name')
        ] 
    ];
    foreach($heros as $hero){
        $table [] =[
           'sur_name' =>[
               '#type' => 'markup',
               '#markup' => $hero['sur_name']
           ],
           'real_name' => [
               '#type' => 'markup',
               '#markup' => $hero['real_name']
           ]
        ];
    }
    // return array(
    //   '#markup' => $this->t('Hero, Block!'),
    // );
    return $table;
  }

}