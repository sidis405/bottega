<?php

namespace Bottega;

use Illuminate\Foundation\Application;

class BottegaApplication extends Application
{
    public function publicPath()
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'../';
    }
}
