<?php declare(strict_types=1);

namespace App\Enums\JobTitle;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class JobTitleEnum extends Enum
{
    const Teacher = 'teacher';
    const Senior = 'Senior';
    const Assistant = 'Assistant';
}
