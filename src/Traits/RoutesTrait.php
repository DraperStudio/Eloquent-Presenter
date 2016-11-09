<?php

namespace BrianFaust\Presenter\Traits;

trait RoutesTrait
{
    /**
     * @var boolean
     */
    protected $appendEntityRouteKey = true;

    /**
     * @return string
     */
    public function indexRoute()
    {
        return $this->buildRoute('index');
    }

    /**
     * @return string
     */
    public function createRoute()
    {
        return $this->buildRoute('create');
    }

    /**
     * @return string
     */
    public function storeRoute()
    {
        return $this->buildRoute('store');
    }

    /**
     * @return string
     */
    public function showRoute()
    {
        return $this->buildRoute('show', true);
    }

    /**
     * @return string
     */
    public function editRoute()
    {
        return $this->buildRoute('edit', true);
    }

    /**
     * @return string
     */
    public function updateRoute()
    {
        return $this->buildRoute('update', true);
    }

    /**
     * @return string
     */
    public function deleteRoute()
    {
        return $this->buildRoute('destroy', true);
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return $this->entity->getRouteKeyName();
    }

    /**
     * @return array
     */
    public function getRouteParameters()
    {
        return [];
    }

    /**
     * @return string
     */
    public function getRoutePrefix()
    {
        return strtolower(str_plural(class_basename(get_class($this->entity))));
    }

    /**
     * @param $key
     *
     * @return mixed
     */
    protected function routeName($key)
    {
        return $this->getRoutePrefix().".$key";
    }

    /**
     * @return string
     */
    protected function buildRoute($name, $keyName = false)
    {
        $name = $this->routeName($name);

        return $keyName ? route($name, $this->buildRouteParameters()) : route($name);
    }

    /**
     * @return array
     */
    protected function buildRouteParameters()
    {
        $entity = $this->entity->toArray();

        $parameters = [];
        foreach ($this->getRouteParameters() as $segment) {
            $parameters[] = array_get($entity, $segment);
        }

        if ($this->appendEntityRouteKey) {
            $parameters[] = array_get($entity, $this->getRouteKeyName());
        }

        return $parameters;
    }
}
