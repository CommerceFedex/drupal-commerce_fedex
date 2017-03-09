<?php

namespace Drupal\commerce_fedex\Event;

/**
 * Defines events for the base Commerce module.
 *
 * Note that submodules have their own defined events.
 */
final class CommerceFedExEvents {

  /**
   * Name of the event fired to allow altering the rate request sent to FedEx.
   *
   * @Event
   *
   * @see \Drupal\commerce_fedex\Event\RateRequestEvent.php
   */
  const BEFORE_RATE_REQUEST = 'commerce_fedex.before_rate_request';

}