<?php declare(strict_types=1);

namespace Modules\School\Enums\Teacher;


use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class JobTitleEnum extends Enum
{
    const Active = 'active';
    const Inactive = 'inactive';

    const OnLeave = 'on_leave';
    const Retired = 'retired';

}

