<?php

namespace Bottega\Utils;

use Spatie\MediaLibrary\UrlGenerator\BaseUrlGenerator;
use Spatie\MediaLibrary\UrlGenerator\UrlGenerator;

 use Spatie\MediaLibrary\Exceptions\UrlCouldNotBeDeterminedException;

class MediaLibraryUrlGenerator extends BaseUrlGenerator implements UrlGenerator
{
    public $path_prefix;

    public function __construct()
    {
        $this->path_prefix = '/image/';
    }

    public function getUrl()
    {
        return $this->path_prefix . $this->getPathRelativeToRoot();
    }
}
