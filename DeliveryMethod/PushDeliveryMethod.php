<?php

namespace DeliveryMethodInterface;

use Notification\NotificationInterface;
use User\User;

class PushDeliveryMethod implements DeliveryMethodInterface
{
    private $platform;

    public function __construct(string $platform)
    {
        $this->platform = $platform;
    }

    public function send(User $user, NotificationInterface $notification): bool
    {
        // Тут должна быть реализация отправки push-уведомления
        // Используйте $this->platform, чтобы определить, как отправить push-уведомление (iOS или Android)
        if ($this->platform == 'android') {
            return true;
        } else {
            return false;
        }
    }
}