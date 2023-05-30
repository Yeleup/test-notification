<?php

namespace DeliveryMethodInterface;

use User\User;

interface DeliveryMethodInterface
{
    public function send(User $user, NotificationInterface $notification): bool;
}