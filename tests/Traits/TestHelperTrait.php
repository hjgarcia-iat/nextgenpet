<?php

namespace Tests\Traits;


/**
 * Trait TestHelperTrait
 * @package Tests\Traits
 */
Trait TestHelperTrait {

    /**
     * Set previous URL
     *
     * @param $url
     * @return $this
     */
    private function from($url)
    {
        session()->setPreviousUrl(url($url));
        return $this;
    }
}