<?php

namespace Drupal\module_hero\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implement an example form
 */
class ExampleForm extends FormBase{

    /**
     * {@inheritdoc}
    */
    public function getFormId() {
        return 'module_hero_exampleForm';
    }

  /**
   * {@inheritdoc}
   */
    public function buildForm(array $form, FormStateInterface $form_state){
        $form['text'] = array(
            '#type' => 'textarea',
            '#title' => $this
            ->t('Text'),
    );
    $form['settings']['active'] = array(
        '#type' => 'radios',
        '#title' => $this
          ->t('Poll status'),
        '#default_value' => 1,
        '#options' => array(
          0 => $this
            ->t('Closed'),
          1 => $this
            ->t('Active'),
        ),
      );
      $form['example_select'] = [
        '#type' => 'select',
        '#title' => $this
          ->t('Select element'),
        '#options' => [
          '1' => $this
            ->t('One'),
          '2' => [
            '2.1' => $this
              ->t('Two point one'),
          ],
          '3' => $this
            ->t('Three'),
        ],
      ];
      $form['pass'] = array(
        '#type' => 'password',
        '#title' => $this
          ->t('Password'),
        '#size' => 25,
        '#pattern' => '[01]+',
      );
      $form['quantity'] = array(
        '#type' => 'range',
        '#title' => $this
          ->t('Quantity'),
      );
      $form['pass'] = array(
        '#type' => 'password_confirm',
        '#title' => $this
          ->t('Password'),
        '#size' => 25,
      );
      $form['expiration'] = array(
        '#type' => 'date',
        '#title' => $this
          ->t('Content expiration'),
        '#default_value' => array(
          'year' => 2020,
          'month' => 2,
          'day' => 15,
        ),
      );
      $form['copy'] = array(
        '#type' => 'checkbox',
        '#title' => $this
          ->t('Send me a copy'),
      );
      $form['example_select'] = [
        '#type' => 'select',
        '#title' => $this
          ->t('Select element'),
        '#options' => [
          '1' => $this
            ->t('One'),
          '2' => [
            '2.1' => $this
              ->t('Two point one'),
            '2.2' => $this
              ->t('Two point two'),
          ],
          '3' => $this
            ->t('Three'),
        ],
      ];
    return $form;
  }
  /**
   * {@inheritdoc}
   */
    public function submitForm(array &$form, FormStateInterface $form_state){

        drupal_set_message("waiwiai");
    }

}