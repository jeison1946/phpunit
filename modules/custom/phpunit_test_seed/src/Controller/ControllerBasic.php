<?php
namespace Drupal\phpunit_test_seed\Controller;

use Drupal\Core\Controller\ControllerBase;

class ControllerBasic extends ControllerBase{

  public function view() {
    $service = \Drupal::service('phpunit_test_seed.service');
    $currentDate = $service->getCurrentDate('custom', 'Y-m-d H:i:s');
    $custom = $service->getCurrentDate(strtotime('2021-05-03 16:20:22'), 'custom', 'Y-m-d H:i:s');

    \Drupal::messenger()->addMessage(t('Cambiando Formato de fechas'));
    return [
      '#type' => 'markup',
      '#markup' => t('Fecha actual @current, fecha personalizada @custom', ['@current' => $currentDate, '@custom' => $custom]),
    ];
  }
}
