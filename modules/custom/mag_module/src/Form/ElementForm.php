<?php

namespace Drupal\mag_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements an example form.
 */
class ElementForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'mag_module.elementform';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
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
    $form['search'] = array(
      '#type' => 'search',
      '#title' => $this
        ->t('Search'),
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
          '2.2' => $this
            ->t('Two point two'),
        ],
        '3' => $this
          ->t('Three'),
      ],
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Who will Wine ?')
    ];
    return $form;
  }
  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message($form_state->getValue('example_select'));
  }
   /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state){

    if(empty($form_state->getValue('search'))){
      $form_state->setErrorByName('search', $this->t('Le champs est vide '));
    }
  }

}