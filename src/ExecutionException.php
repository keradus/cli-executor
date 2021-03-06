<?php

/*
 * This file is part of CLI Executor.
 *
 * (c) Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Keradus\CliExecutor;

final class ExecutionException extends \RuntimeException
{
    /**
     * @var CliResult
     */
    private $result;

    public function __construct(CliResult $result, $message = '', $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->result = $result;
    }

    /**
     * @return CliResult
     */
    public function getResult()
    {
        return $this->result;
    }
}
