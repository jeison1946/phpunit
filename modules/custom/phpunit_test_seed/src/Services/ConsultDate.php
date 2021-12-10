<?php
namespace Drupal\phpunit_test_seed\Services;

class ConsultDate {

  public function getCurrentDate($type, $format = '') {
    $date = FALSE;
    if ($type) {
      $date = \Drupal::service('date.formatter')->format(time(), $type, $format);
    }
    return $date;
  }

  public function customDateFormat($date, $type, $format = '') {
    \Drupal::messenger()->addMessage('Prueba de cambio de fecha');
    return \Drupal::service('date.formatter')->format($date, $type, $format);
  }
}
