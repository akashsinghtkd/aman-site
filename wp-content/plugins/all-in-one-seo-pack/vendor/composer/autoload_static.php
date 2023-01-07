<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5fdfbeca869fb6fc52dcb7011522be45
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'A' => 
        array (
            'AIOSEO\\Plugin\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'AIOSEO\\Plugin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPInsight' => 
            array (
                0 => __DIR__ . '/..' . '/jwhennessey/phpinsight/lib',
            ),
        ),
    );

    public static $classMap = array (
        'AIOSEO\\Vendor\\Monolog\\ErrorHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/ErrorHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Formatter\\ChromePHPFormatter' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Formatter/ChromePHPFormatter.php',
        'AIOSEO\\Vendor\\Monolog\\Formatter\\ElasticaFormatter' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Formatter/ElasticaFormatter.php',
        'AIOSEO\\Vendor\\Monolog\\Formatter\\FlowdockFormatter' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Formatter/FlowdockFormatter.php',
        'AIOSEO\\Vendor\\Monolog\\Formatter\\FluentdFormatter' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Formatter/FluentdFormatter.php',
        'AIOSEO\\Vendor\\Monolog\\Formatter\\FormatterInterface' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Formatter/FormatterInterface.php',
        'AIOSEO\\Vendor\\Monolog\\Formatter\\GelfMessageFormatter' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Formatter/GelfMessageFormatter.php',
        'AIOSEO\\Vendor\\Monolog\\Formatter\\HtmlFormatter' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Formatter/HtmlFormatter.php',
        'AIOSEO\\Vendor\\Monolog\\Formatter\\JsonFormatter' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Formatter/JsonFormatter.php',
        'AIOSEO\\Vendor\\Monolog\\Formatter\\LineFormatter' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Formatter/LineFormatter.php',
        'AIOSEO\\Vendor\\Monolog\\Formatter\\LogglyFormatter' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Formatter/LogglyFormatter.php',
        'AIOSEO\\Vendor\\Monolog\\Formatter\\LogstashFormatter' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Formatter/LogstashFormatter.php',
        'AIOSEO\\Vendor\\Monolog\\Formatter\\MongoDBFormatter' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Formatter/MongoDBFormatter.php',
        'AIOSEO\\Vendor\\Monolog\\Formatter\\NormalizerFormatter' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Formatter/NormalizerFormatter.php',
        'AIOSEO\\Vendor\\Monolog\\Formatter\\ScalarFormatter' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Formatter/ScalarFormatter.php',
        'AIOSEO\\Vendor\\Monolog\\Formatter\\WildfireFormatter' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Formatter/WildfireFormatter.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\AbstractHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/AbstractHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\AbstractProcessingHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\AbstractSyslogHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/AbstractSyslogHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\AmqpHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/AmqpHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\BrowserConsoleHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/BrowserConsoleHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\BufferHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/BufferHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\ChromePHPHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/ChromePHPHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\CouchDBHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/CouchDBHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\CubeHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/CubeHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\Curl\\Util' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/Curl/Util.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\DeduplicationHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/DeduplicationHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\DoctrineCouchDBHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/DoctrineCouchDBHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\DynamoDbHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/DynamoDbHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\ElasticSearchHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/ElasticSearchHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\ErrorLogHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/ErrorLogHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\FilterHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/FilterHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\FingersCrossedHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/FingersCrossedHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\FingersCrossed\\ActivationStrategyInterface' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/FingersCrossed/ActivationStrategyInterface.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\FingersCrossed\\ChannelLevelActivationStrategy' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/FingersCrossed/ChannelLevelActivationStrategy.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/FingersCrossed/ErrorLevelActivationStrategy.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\FirePHPHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/FirePHPHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\FleepHookHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/FleepHookHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\FlowdockHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/FlowdockHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\FormattableHandlerInterface' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/FormattableHandlerInterface.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\FormattableHandlerTrait' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/FormattableHandlerTrait.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\GelfHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/GelfHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\GroupHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/GroupHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\HandlerInterface' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/HandlerInterface.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\HandlerWrapper' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/HandlerWrapper.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\HipChatHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/HipChatHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\IFTTTHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/IFTTTHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\InsightOpsHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/InsightOpsHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\LogEntriesHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/LogEntriesHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\LogglyHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/LogglyHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\MailHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/MailHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\MandrillHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/MandrillHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\MissingExtensionException' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/MissingExtensionException.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\MongoDBHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/MongoDBHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\NativeMailerHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/NativeMailerHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\NewRelicHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/NewRelicHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\NullHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/NullHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\PHPConsoleHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/PHPConsoleHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\ProcessableHandlerInterface' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/ProcessableHandlerInterface.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\ProcessableHandlerTrait' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/ProcessableHandlerTrait.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\PsrHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/PsrHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\PushoverHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/PushoverHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\RavenHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/RavenHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\RedisHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/RedisHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\RollbarHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/RollbarHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\RotatingFileHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/RotatingFileHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\SamplingHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/SamplingHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\SlackHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/SlackHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\SlackWebhookHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/SlackWebhookHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\Slack\\SlackRecord' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/Slack/SlackRecord.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\SlackbotHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/SlackbotHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\SocketHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/SocketHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\StreamHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/StreamHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\SwiftMailerHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/SwiftMailerHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\SyslogHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/SyslogHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\SyslogUdpHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/SyslogUdpHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\SyslogUdp\\UdpSocket' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/SyslogUdp/UdpSocket.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\TestHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/TestHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\WhatFailureGroupHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/WhatFailureGroupHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Handler\\ZendMonitorHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Handler/ZendMonitorHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Logger' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Logger.php',
        'AIOSEO\\Vendor\\Monolog\\Processor\\GitProcessor' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Processor/GitProcessor.php',
        'AIOSEO\\Vendor\\Monolog\\Processor\\IntrospectionProcessor' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Processor/IntrospectionProcessor.php',
        'AIOSEO\\Vendor\\Monolog\\Processor\\MemoryPeakUsageProcessor' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Processor/MemoryPeakUsageProcessor.php',
        'AIOSEO\\Vendor\\Monolog\\Processor\\MemoryProcessor' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Processor/MemoryProcessor.php',
        'AIOSEO\\Vendor\\Monolog\\Processor\\MemoryUsageProcessor' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Processor/MemoryUsageProcessor.php',
        'AIOSEO\\Vendor\\Monolog\\Processor\\MercurialProcessor' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Processor/MercurialProcessor.php',
        'AIOSEO\\Vendor\\Monolog\\Processor\\ProcessIdProcessor' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Processor/ProcessIdProcessor.php',
        'AIOSEO\\Vendor\\Monolog\\Processor\\ProcessorInterface' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Processor/ProcessorInterface.php',
        'AIOSEO\\Vendor\\Monolog\\Processor\\PsrLogMessageProcessor' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php',
        'AIOSEO\\Vendor\\Monolog\\Processor\\TagProcessor' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Processor/TagProcessor.php',
        'AIOSEO\\Vendor\\Monolog\\Processor\\UidProcessor' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Processor/UidProcessor.php',
        'AIOSEO\\Vendor\\Monolog\\Processor\\WebProcessor' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Processor/WebProcessor.php',
        'AIOSEO\\Vendor\\Monolog\\Registry' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Registry.php',
        'AIOSEO\\Vendor\\Monolog\\ResettableInterface' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/ResettableInterface.php',
        'AIOSEO\\Vendor\\Monolog\\SignalHandler' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/SignalHandler.php',
        'AIOSEO\\Vendor\\Monolog\\Utils' => __DIR__ . '/../..' . '/vendor_prefixed/monolog/monolog/src/Monolog/Utils.php',
        'AIOSEO\\Vendor\\Psr\\Log\\AbstractLogger' => __DIR__ . '/../..' . '/vendor_prefixed/psr/log/Psr/Log/AbstractLogger.php',
        'AIOSEO\\Vendor\\Psr\\Log\\InvalidArgumentException' => __DIR__ . '/../..' . '/vendor_prefixed/psr/log/Psr/Log/InvalidArgumentException.php',
        'AIOSEO\\Vendor\\Psr\\Log\\LogLevel' => __DIR__ . '/../..' . '/vendor_prefixed/psr/log/Psr/Log/LogLevel.php',
        'AIOSEO\\Vendor\\Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/../..' . '/vendor_prefixed/psr/log/Psr/Log/LoggerAwareInterface.php',
        'AIOSEO\\Vendor\\Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/../..' . '/vendor_prefixed/psr/log/Psr/Log/LoggerAwareTrait.php',
        'AIOSEO\\Vendor\\Psr\\Log\\LoggerInterface' => __DIR__ . '/../..' . '/vendor_prefixed/psr/log/Psr/Log/LoggerInterface.php',
        'AIOSEO\\Vendor\\Psr\\Log\\LoggerTrait' => __DIR__ . '/../..' . '/vendor_prefixed/psr/log/Psr/Log/LoggerTrait.php',
        'AIOSEO\\Vendor\\Psr\\Log\\NullLogger' => __DIR__ . '/../..' . '/vendor_prefixed/psr/log/Psr/Log/NullLogger.php',
        'AIOSEO\\Vendor\\Psr\\Log\\Test\\DummyTest' => __DIR__ . '/../..' . '/vendor_prefixed/psr/log/Psr/Log/Test/DummyTest.php',
        'AIOSEO\\Vendor\\Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/../..' . '/vendor_prefixed/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'AIOSEO\\Vendor\\Psr\\Log\\Test\\TestLogger' => __DIR__ . '/../..' . '/vendor_prefixed/psr/log/Psr/Log/Test/TestLogger.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5fdfbeca869fb6fc52dcb7011522be45::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5fdfbeca869fb6fc52dcb7011522be45::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5fdfbeca869fb6fc52dcb7011522be45::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit5fdfbeca869fb6fc52dcb7011522be45::$classMap;

        }, null, ClassLoader::class);
    }
}
