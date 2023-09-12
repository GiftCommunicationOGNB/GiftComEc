<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'monolog.handler.YamatoPayment4_rotating_file' shared service.

include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/RotatingFileHandler.php';
include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Formatter/FormatterInterface.php';
include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Formatter/NormalizerFormatter.php';
include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Formatter/LineFormatter.php';
include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php';

$this->services['monolog.handler.YamatoPayment4_rotating_file'] = $instance = new \Monolog\Handler\RotatingFileHandler(($this->targetDirs[2].'/log/dev/YamatoPayment4.log'), 60, 100, true, NULL);

$instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : ($this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())) && false ?: '_'});
$instance->setFilenameFormat('{filename}-{date}', 'Y-m-d');
$instance->setFormatter(new \Monolog\Formatter\LineFormatter('[%datetime%] %channel%.%level_name% [%extra.session_id%] [%extra.uid%] [%extra.user_id%] [%extra.class%:%extra.function%:%extra.line%] - %message% %context% [%extra.http_method%, %extra.url%, %extra.ip%, %extra.referrer%, %extra.user_agent%]'."\n".''));

return $instance;
