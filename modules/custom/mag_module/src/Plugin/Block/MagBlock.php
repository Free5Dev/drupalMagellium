<?php 

namespace Drupal\mag_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "mag_block",
 *   admin_label = @Translation("Mag  Block Module"),
 * )
 */
class MagBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
public function build() {
    $mags = [
        ['name' => 'Back', 'techno'=>'Drupal'],
        ['name' => 'Etn', 'techno'=>'Ent\'nno'],
        ['name' => 'Bdd', 'techno'=>'postGres'],
        ['name' => 'Esri', 'techno'=>'Argis']

    ];
    $table = [
        '#type' =>'table',
        '#header' => [
            $this->t('Name'),
            $this->t('Tecno')
        ]
    ];
    foreach($mags as $mag){
        $table [] = [
            'name' =>[
                '#type' => 'markup',
                '#markup' =>$mag['name']
            ],
            'techno' =>[
                '#type' =>'markup',
                '#markup' => $mag['techno']
            ]
        ];
    }
    return $table;
  }

}