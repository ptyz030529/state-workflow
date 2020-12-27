<?php

namespace Linkbee\StateWorkflow\Interfaces;

use Symfony\Component\Workflow\WorkflowInterface;

/**
 * Interface WorkflowRegistryInterface.
 */
interface WorkflowRegistryInterface
{
    /**
     * Returns SateWorkflow.
     *
     * @param object $object
     * @param null   $workflowName
     *
     * @return WorkflowInterface
     */
    public function get($object, $workflowName = null);

    /**
     * Register workflow subscribers.
     *
     * @param $class
     * @param $name
     *
     * @return void
     */
    public function addSubscriber($class, $name);
}
