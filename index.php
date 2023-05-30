<?php

use DeliveryMethodInterface\EmailDeliveryMethod;
use Notification\EmailNotification;
use Notification\NotificationService;
use Notification\PushNotification;
use Notification\SmsNotification;
use User\User;

$emailDeliveryMethod = new EmailDeliveryMethod();

$notificationService = new NotificationService();
$notificationService->addDeliveryMethod($emailDeliveryMethod);

$user = new User(1, 'user@example.com', '1234567890', ['device_id' => 'abcdef', 'platform' => 'android']);
$user2 = new User(2, 'user2@example.com', '1234567892', ['device_id' => 'abcdef', 'platform' => 'ios']);

$emailNotification = new EmailNotification('Это уведомление по электронной почте');
$smsNotification = new SmsNotification('Это SMS-уведомление');
$pushNotification = new PushNotification('Это push-уведомление');

$notificationService->sendNotification($user, $emailNotification);
$notificationService->sendNotification($user2, $emailNotification);

