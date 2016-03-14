<?php

/*
 * This file is part of Eloquent Presenter.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Eloquent\Presenter;

/**
 * Class BasePresenter.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class BasePresenter extends Presenter
{
    use Traits\RoutesTrait;
    use Traits\DateTimeTrait;
}
