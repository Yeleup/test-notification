<?php

namespace DeliveryMethodInterface;

use Notification\NotificationInterface;
use User\User;

class EmailDeliveryMethod implements DeliveryMethodInterface
{
    public function send(User $user, NotificationInterface $notification): bool
    {
        return true;
    }
}