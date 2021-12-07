<?php
namespace Drupal\phpunit_test_seed\Services;

class ConsultDate {

  public function getCurrentDate($type, $format = '') {
    return \Drupal::service('date.formatter')->format(time(), $type, $format);
  }

  public function customDateFormat($date, $type, $format = '') {
    \Drupal::messenger()->addMessage('Prueba de cambio de fecha');
    return \Drupal::service('date.formatter')->format($date, $type, $format);
  }
}
