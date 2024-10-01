<?php declare(strict_types=1);

namespace Modules\School\Enums\Teacher;


use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class EmploymentTypeEnum extends Enum
{
    const FullTime = 'full-time';
    const PartTime = 'part-time';
    const Contract = 'contract';
}

