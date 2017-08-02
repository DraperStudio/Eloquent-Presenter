<?php

/*
 * This file is part of Eloquent Presenter.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Presenter;

class BasePresenter extends Presenter
{
    use Traits\RoutesTrait;
    use Traits\DateTimeTrait;
}
