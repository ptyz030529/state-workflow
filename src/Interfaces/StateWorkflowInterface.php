<?php

namespace Linkbee\StateWorkflow\Interfaces;

/**
 * Interface StateWorkflowInterface.
 */
interface StateWorkflowInterface
{
    /**
     * Returns the current state.
     *
     * @param $object
     *
     * @return mixed
     */
    public function getState($object);
}
