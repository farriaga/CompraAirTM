<?php
namespace Omnipay\AirTM;

require_once "autoload.php";
use Omnipay\Common\AbstractGateway;

/**
 * Gateway.
 */

class Gateway extends AbstractGateway
{

  /**
   * Get name.
   */

  public function getName()
  {
    return 'AirTM';
  }

  /**
   * Get default parameters.
   */

  public function getDefaultParameters()
  {
    return [
      'partnerId' => '7d9e3d6e-41b6-4569-955d-17ef3051a1df',
      'partnerSecret' => 'Q8G4WCPkxrqE9MHXFYv6J7W8fKxcOcD9Sc2VrTsbx6q9X1Kog0v9Q6nFWYtNdJcF',
      'testMode' => false
    ];
  }

  /**
   * Get partner id.
   */

  public function getPartnerId()
  {
    return $this->getParameter('partnerId');
  }

  /**
   * Set partner id.
   */

  public function setPartnerId(string $partnerId)
  {
    return $this->setParameter('partnerId', $partnerId);
  }

  /**
   * Get partner secret.
   */

  public function getPartnerSecret()
  {
    return $this->getParameter('partnerSecret');
  }

  /**
   * Set partner secret.
   */

  public function setPartnerSecret(string $partnerSecret)
  {
    return $this->setParameter('partnerSecret', $partnerSecret);
  }

  /**
   * Purchase.
   */

  public function purchase(array $parameters = array())
  {
    return $this->createRequest('\Omnipay\AirTM\Message\PurchaseRequest', $parameters);
  }

  /**
   * Get.
   */

  public function get(array $parameters = array())
  {
    return $this->createRequest('\Omnipay\AirTM\Message\GetRequest', $parameters);
  }
}
