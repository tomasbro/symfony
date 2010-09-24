<?php

namespace Symfony\Component\Validator\Constraints;

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Choice extends \Symfony\Component\Validator\Constraint
{
    public $choices;
    public $callback;
    public $multiple = false;
    public $min = null;
    public $max = null;
    public $message = 'This value should be one of the given choices';
    public $minMessage = 'You should select at least %limit% choices';
    public $maxMessage = 'You should select at most %limit% choices';

    /**
     * {@inheritDoc}
     */
    public function defaultOption()
    {
        return 'choices';
    }
}
