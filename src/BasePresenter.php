<?php

declare(strict_types=1);

/*
 * This file is part of Eloquent Presenter.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Presenter;

class BasePresenter extends Presenter
{
    use Traits\RoutesTrait;
    use Traits\DateTimeTrait;
}
