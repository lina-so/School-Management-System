<?php declare(strict_types=1);

namespace Modules\School\Enums\QuestionStatus;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class QuestionStatusEnum extends Enum
{
    const MultipleChoice = 'multiple_choice';
    const TrueFalse = 'true_false';
}

