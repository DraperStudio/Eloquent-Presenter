<?php



declare(strict_types=1);

namespace BrianFaust\Presenter;

class BasePresenter extends Presenter
{
    use Traits\RoutesTrait;
    use Traits\DateTimeTrait;
}
