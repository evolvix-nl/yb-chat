<?php

declare(strict_types=1);

namespace App\Enums;

enum ApplicationStatus: string
{
    case APPLIED = 'pending';
    case ACCEPTED = 'accepted';
    case REJECTED = 'rejected';
}
