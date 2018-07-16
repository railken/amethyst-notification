<?php

namespace Railken\LaraOre\Notification\Exceptions;

class NotificationNotFoundException extends NotificationException
{
    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'NOTIFICATION_NOT_FOUND';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'Not found';
}
