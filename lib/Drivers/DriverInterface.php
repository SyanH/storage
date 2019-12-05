<?php

namespace Cyy\Storage\Drivers;

interface DriverInterface
{
    function put($localFile, $saveTo);
}
