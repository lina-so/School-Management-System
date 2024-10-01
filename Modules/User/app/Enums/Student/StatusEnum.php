<?php declare(strict_types=1);

namespace Modules\School\Enums\Student;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class StatusEnum extends Enum
{
    const Active = 'active';
    const Inactive = 'inactive';

    const Graduated = 'graduated';
    const Suspended = 'suspended';
    const Transferred = 'transferred';
    const Withdrawn = 'withdrawn';

}

