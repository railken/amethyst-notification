<?php

namespace Railken\LaraOre\Notification\Attributes\Type\Exceptions;

use Railken\LaraOre\Notification\Exceptions\NotificationAttributeException;

class NotificationTypeNotValidException extends NotificationAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'type';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'NOTIFICATION_TYPE_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}