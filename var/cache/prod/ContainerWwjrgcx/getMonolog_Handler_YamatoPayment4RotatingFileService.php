<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'monolog.handler.YamatoPayment4_rotating_file' shared service.

$this->services['monolog.handler.YamatoPayment4_rotating_file'] = $instance = new \Monolog\Handler\RotatingFileHandler(($this->targetDirs[2].'/log/prod/YamatoPayment4.log'), 60, 100, true, NULL);

$instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : ($this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())) && false ?: '_'});
$instance->setFilenameFormat('{filename}-{date}', 'Y-m-d');
$instance->setFormatter(${($_ = isset($this->services['eccube.log.formatter.line']) ? $this->services['eccube.log.formatter.line'] : $this->getEccube_Log_Formatter_LineService()) && false ?: '_'});

return $instance;
