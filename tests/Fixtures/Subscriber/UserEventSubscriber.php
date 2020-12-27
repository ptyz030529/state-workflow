<?php

namespace Linkbee\StateWorkflow\Tests\Fixtures\Subscriber;

use Illuminate\Support\Facades\Log;
use Linkbee\StateWorkflow\Events\CompletedEvent;
use Linkbee\StateWorkflow\Events\EnteredEvent;
use Linkbee\StateWorkflow\Events\EnterEvent;
use Linkbee\StateWorkflow\Events\GuardEvent;
use Linkbee\StateWorkflow\Events\LeaveEvent;
use Linkbee\StateWorkflow\Events\TransitionEvent;
use Linkbee\StateWorkflow\Subscribers\WorkflowSubscriberHandler;

/**
 * Class UserEventSubscriber.
 */
class UserEventSubscriber extends WorkflowSubscriberHandler
{
    /**
     * @param GuardEvent $event
     */
    public function onGuard($event)
    {
        Log::info(__METHOD__);

        //$event->getOriginalEvent()->setBlocked(true);
        Log::info('workflow name: '.$event->getOriginalEvent()->getWorkflowName());
        Log::info('transition name: '.$event->getOriginalEvent()->getTransition()->getName());
        Log::info('froms: '.implode(',', $event->getOriginalEvent()->getTransition()->getFroms()));
        Log::info('tos: '.implode(',', $event->getOriginalEvent()->getTransition()->getTos()));
    }

    /**
     * @param GuardEvent $event
     */
    public function onGuardActivate($event)
    {
        Log::info(__METHOD__);

        Log::info('workflow name: '.$event->getOriginalEvent()->getWorkflowName());
        Log::info('transition name: '.$event->getOriginalEvent()->getTransition()->getName());
        Log::info('froms: '.implode(',', $event->getOriginalEvent()->getTransition()->getFroms()));
        Log::info('tos: '.implode(',', $event->getOriginalEvent()->getTransition()->getTos()));
    }

    /**
     * Handle workflow leave event.
     *
     * @param LeaveEvent $event
     */
    public function onLeave($event)
    {
        Log::info(__METHOD__);
    }

    public function onLeavePendingActivation()
    {
        Log::info(__METHOD__);
    }

    /**
     * Handle workflow transition event.
     *
     * @param TransitionEvent $event
     */
    public function onTransition($event)
    {
        Log::info(__METHOD__);
    }

    /**
     * Handle workflow enter event.
     *
     * @param EnterEvent $event
     */
    public function onEnter($event)
    {
        Log::info(__METHOD__);
    }

    /**
     * Handle workflow entered event.
     *
     * @param EnteredEvent $event
     */
    public function onEntered($event)
    {
        Log::info(__METHOD__);
    }

    /**
     * @param CompletedEvent $event
     */
    public function onCompleted($event)
    {
        Log::info(__METHOD__);

        Log::info('workflow name: '.$event->getOriginalEvent()->getWorkflowName());
        Log::info('transition name: '.$event->getOriginalEvent()->getTransition()->getName());
        Log::info('froms: '.implode(',', $event->getOriginalEvent()->getTransition()->getFroms()));
        Log::info('tos: '.implode(',', $event->getOriginalEvent()->getTransition()->getTos()));
    }

    /**
     * @param EnteredEvent $event
     */
    public function onEnteredDeleted($event)
    {
        Log::info(__METHOD__);
    }
}
