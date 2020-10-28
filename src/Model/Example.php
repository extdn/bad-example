<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Extdn\BadExample\Model;

class Example
{

    /**
     * @var \Magento\Framework\Filesystem\Io\File
     */
    private $file;

    /**
     * @param \Magento\Framework\Filesystem\Io\File   $file
     */
    public function __construct(
        \Magento\Framework\Filesystem\Io\File $file
    ) {
        $this->file = $file;
    }

    public function readIt()
    {
        $this->file->unkownMethod();
    }
}
