<?php

namespace App\Service;

use App\Service\Contract\MessageInterface;

class MessageGenerator implements MessageInterface
{
    public function getHappyMessage(): string
    {
        $messages = [
            'You did it! You updated the system! Amazing!',
            'That was one of the coolest updates I\'ve seen all day!',
            'Great work! Keep going!',
        ];
        $index = array_rand($messages);
        return $messages[$index];
    }
}