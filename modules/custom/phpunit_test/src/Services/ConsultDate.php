<?php
namespace Drupal\phpunit_test\Services;

use Drupal\Core\Datetime\DateFormatter;

class ConsultDate {

  public $datformatter;

  public function __construct(DateFormatter $dateFormatter)
  {
    $this->datformatter = $dateFormatter;
  }

  public function getCurrentDate($type, $format = '') {
    $date = FALSE;
    if ($type) {
      $date = $this->datformatter->format(time(), $type, $format);
    }
    return $date;
  }

  public function customDateFormat($date, $type, $format = '') {
    \Drupal::messenger()->addMessage('Prueba de cambio de fecha');
    return \Drupal::service('date.formatter')->format($date, $type, $format);
  }
}
