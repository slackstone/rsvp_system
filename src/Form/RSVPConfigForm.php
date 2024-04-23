<?php

namespace Drupal\rsvp_system\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

class RSVPConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['rsvp_system.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'rsvp_system_admin_settings';
  }

  /**
   * {@inheritdoc}
   */

public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('rsvp_system.settings');

    $form['debug'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Enable debug mode'),
      '#default_value' => $config->get('debug'),
    ];

    // Fetch the module handler service
    $module_handler = \Drupal::service('module_handler');
    // Get the path of the module
    $module_path = $module_handler->getModule('rsvp_system')->getPath();

    // Construct the full URL to the CSV files
    $location_csv_url = $GLOBALS['base_url'] . '/' . $module_path . '/data/example_locations.csv';
    $department_csv_url = $GLOBALS['base_url'] . '/' . $module_path . '/data/example_departments.csv';

    $form['csv_examples'] = [
      '#type' => 'item',
      '#title' => $this->t('Example CSV Files'),
      '#markup' => $this->t('Download example CSV files for Locations and Departments: <a href="@location_link" target="_blank">Location CSV</a> | <a href="@department_link" target="_blank">Department CSV</a>', [
        '@location_link' => $location_csv_url,
        '@department_link' => $department_csv_url,
      ]),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('rsvp_system.settings')
      ->set('debug', $form_state->getValue('debug'))
      ->save();

    parent::submitForm($form, $form_state);
  }
}
