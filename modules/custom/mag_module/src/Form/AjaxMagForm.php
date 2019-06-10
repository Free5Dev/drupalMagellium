<?php 

namespace Drupal\mag_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;
/**
 * Implement Ajax Mag Form
 */
class AjaxMagForm extends FormBase{

    /**
     * {@inheritdoc}
     */
    public function getFormId(){
        return 'mag_module_ajaxmagform';
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state){
        $form['message'] = [
            '#type' => 'markup',
            '#markup' => '<div class="result_message"></div>'
        ];
        $form['rival_1'] = [
            '#type' => 'textfield',
            '#title' => 'Rival One'
        ];
        $form['rival_2'] = [
            '#type' => 'textfield',
            '#title' => 'Rival Two'
        ];
        $form['submit'] = [
            '#type' =>'submit',
            '#value' => $this->t('Who Will Wine ?'),
            '#ajax' => [
                'callback' => '::setMessage',
            ]
        ];
        return $form;
    }
    /**
     * Ajax Response
     */
    public function setMessage(array &$form, FormStateInterface $form_state){
        $winner = rand(1,2);
        $response = new AjaxResponse();
        $response->addCommand(
            new HtmlCommand(
                '.result_message',
                'The winner is '.$form_state->getValue('rival_'.$winner)
            )
        );
        return $response;
    }
    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state){
        dsm($form_state->getValues());
        $winner = rand(1, 2);
        drupal_set_message('The winner is : '.$form_state->getValue('rival_'.$winner));
    }
}