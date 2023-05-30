<?php

namespace Notification;

use DeliveryMethodInterface\DeliveryMethodInterface;
use User\User;

class NotificationService
{
    private array $deliveryMethods;

    public function addDeliveryMethod(DeliveryMethodInterface $deliveryMethod): void
    {
        $this->deliveryMethods[] = $deliveryMethod;
    }

    public function sendNotification(User $user, NotificationInterface $notification): void
    {
        foreach ($this->deliveryMethods as $deliveryMethod) {
            $deliveryMethod->send($user, $notification);
        }
    }
}