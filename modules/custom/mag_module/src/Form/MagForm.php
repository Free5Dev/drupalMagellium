<?php 

namespace Drupal\mag_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implementation du formulaire
 */
class MagForm extends FormBase{
    /**
     * {@inheritdoc}
     */
    public function getFormId(){
        return 'mag_module_magform';
    }
    /**
     * {@inheritdoc}
    */
    public function buildForm(array $form, FormStateInterface $form_state){
        $form['rival_1'] =[
            '#type' =>'textfield',
            '#title' => $this->t('Rival One')
        ];
        $form['rival_2'] =[
            '#type' =>'textfield',
            '#title' => $this->t('Rival Two')
        ];
        $form['submit'] =[
            '#type' =>'submit',
            '#value' => $this->t('ho will wine ?')
        ];
        return $form;
    }
    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state){
        drupal_set_message($form_state->getValue('rival_1'));
    }
}