<?php

namespace webignition\NormalisedUrl;

use webignition\Url\Url as RegularUrl;

class NormalisedUrl extends RegularUrl
{
    /**
     * {@inheritdoc}
     */
    protected function createParser()
    {
        return new Normaliser($this->originUrl);
    }
}