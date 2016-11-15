<?php

namespace BrianFaust\Presenter;

use Exceptions\PresenterException;

trait HasViewPresenterTrait
{
    /**
     * View presenter instance.
     *
     * @var mixed
     */
    protected $presenterInstance;

    /**
     * Prepare a new or cached presenter instance.
     *
     * @throws PresenterException
     *
     * @return mixed
     */
    public function present()
    {
        $presenterClass = $this->getPresenterClass();

        if (!class_exists($presenterClass)) {
            throw new PresenterException('The specified presenter does not exist.');
        }

        if (!$this->presenterInstance) {
            $this->presenterInstance = new $presenterClass($this);
        }

        return $this->presenterInstance;
    }

    /**
     * Get the view presenter for the model.
     *
     * @return string
     */
    protected function getPresenterClass()
    {
        return "App\\Presenters\\".class_basename($this);
    }
}
