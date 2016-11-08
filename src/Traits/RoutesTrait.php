<?php

namespace BrianFaust\Presenter\Traits;

trait RoutesTrait
{
    /**
     * @return string
     */
    public function createRoute()
    {
        return route($this->routeName('create'));
    }

    /**
     * @return string
     */
    public function showRoute()
    {
        return route($this->routeName('show'), $this->{$this->routeModelIdentifier()});
    }

    /**
     * @return string
     */
    public function editRoute()
    {
        return route($this->routeName('edit'), $this->{$this->routeModelIdentifier()});
    }

    /**
     * @return string
     */
    public function deleteRoute()
    {
        return route($this->routeName('delete'), $this->{$this->routeModelIdentifier()});
    }

    /**
     * @return string
     */
    public function listRoute()
    {
        return route($this->routeName('list'));
    }

    /**
     * @return string
     */
    public function routeModelIdentifier()
    {
        return 'id';
    }

    /**
     * @return string
     */
    public function routeNamePrefix()
    {
        return 'prefix';
    }

    /**
     * @return array
     */
    public function routeNames()
    {
        $prefix = $this->routeNamePrefix();

        return [
            'create' => $prefix.'.create',
            'show' => $prefix.'.show',
            'edit' => $prefix.'.edit',
            'delete' => $prefix.'.delete',
            'list' => $prefix.'.list',
        ];
    }

    /**
     * @param $key
     *
     * @return mixed
     */
    private function routeName($key)
    {
        return $this->routeNames()[$key];
    }
}
