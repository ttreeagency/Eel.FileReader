<?php
declare(strict_types=1);

namespace Ttree\Eel\FileReader;

use Neos\Flow\Annotations as Flow;
use Neos\Eel\ProtectedContextAwareInterface;

/**
 * @Flow\Proxy(false)
 */
class FileReaderHelper implements ProtectedContextAwareInterface
{
    public function get(string $resource) :string
    {
        return \file_get_contents($resource);
    }

    public function allowsCallOfMethod($methodName)
    {
        return true;
    }
}
