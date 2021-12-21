<?php

namespace Samfelgar\MetabaseDashboard\DataTransferObjects;

class Dashboard
{
    private string $url;
    private string $key;
    private int $resource;
    private array $params;

    public function __construct(string $url, string $key, int $resource, array $params)
    {
        $this->url = $url;
        $this->key = $key;
        $this->resource = $resource;
        $this->params = $params;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getResource(): int
    {
        return $this->resource;
    }

    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * Get a specific parameter or null, if it doesn't exist.
     *
     * @param string $key
     * @return mixed|null
     */
    public function getParam(string $key)
    {
        if (!isset($this->params[$key])) {
            return null;
        }

        return $this->params[$key];
    }

    /**
     * Add a parameter to the params property, specifying the key.
     * Duplicated keys will be replaced.
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function addParam(string $key, $value): void
    {
        $this->params[$key] = $value;
    }
}
