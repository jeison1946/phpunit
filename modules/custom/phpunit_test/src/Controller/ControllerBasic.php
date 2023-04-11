<?php
namespace Drupal\phpunit_test\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\phpunit_test\Services\ConsultDate;

class ControllerBasic extends ControllerBase{

  protected $phpunitService;
  protected $messenger;

  public function __construct(ConsultDate $consultDate, MessengerInterface $messenger)
  {
    $this->phpunitService = $consultDate;
    $this->messenger = $messenger;
  }

  public function view($date) {
    $service = $this->phpunitService;
    $currentDate = $service->getCurrentDate('custom', 'Y-m-d H:i:s');
    $custom = $service->getCurrentDate(strtotime('2021-05-03 16:20:22'), 'custom', 'Y-m-d H:i:s');

    $this->messenger->addMessage('Cambiando Formato de fechas');

    if ($date == 1) {
      $currentDate = time();
    }

    return [
      '#type' => 'markup',
      '#markup' => 'success'
    ];
  }
}
