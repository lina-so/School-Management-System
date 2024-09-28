<?php declare(strict_types=1);

namespace App\Enums\Status;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class StatusEnum extends Enum
{
    const active = 'active';
    const inactive = 'inactive';

    const OnLeave = 'on_leave';
    const Retired = 'retired';

    const Graduated = 'graduated';
    const Suspended = 'suspended';
    const Transferred = 'transferred';
    const Withdrawn = 'withdrawn';
}

