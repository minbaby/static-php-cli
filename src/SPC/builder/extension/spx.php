<?php

declare(strict_types=1);

namespace SPC\builder\extension;

use SPC\builder\Extension;
use SPC\util\CustomExt;

#[CustomExt('spx')]
class spx extends Extension
{
    public function getUnixConfigureArg(): string
    {
        return '--enable-spx --with-zlib --with-zlib-dir="' . BUILD_ROOT_PATH . '"';
    }
}
