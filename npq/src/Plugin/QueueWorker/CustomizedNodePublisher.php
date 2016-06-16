<?php

namespace Drupal\npq\Plugin\QueueWorker;

/**
 * A Node Publisher that publishes nodes via a manual action triggered by an admin.
 *
 * @QueueWorker(
 *   id = "customized_node_publisher",
 *   title = @Translation("Customized Node Publisher"),
 * )
 */
class CustomizedNodePublisher extends NodePublishBase {}