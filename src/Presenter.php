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
 * Class AbstractPresenter.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
abstract class Presenter
{
    /**
     * @var mixed
     */
    protected $entity;

    /**
     * AbstractPresenter constructor.
     *
     * @param $entity
     */
    public function __construct($entity)
    {
        $this->entity = $entity;
    }

    /**
     * Allow for property-style retrieval.
     *
     * @param $property
     *
     * @return mixed
     */
    public function __get($property)
    {
        if (method_exists($this, $property)) {
            return $this->{$property}();
        }

        return $this->entity->{$property};
    }
}
