<?php

interface ILogger {
    public function log( string $message );
}

class DBLogger implements ILogger {
    public function log( string $message ) {
        echo "I'm a DBLogger. I've put $message to DB. \r\n";
    }
}

class FileLogger implements ILogger {
    public function log( string $message ) {
        echo "I'm a FileLogger. I've put $message to file. \r\n";
    }
}

class ExternalServiceLogger implements ILogger {
    public function log( string $message ) {
        echo "I'm a ExternalServiceLogger. I've sent $message to external service. \r\n";
    }
}

class LoggerRegistry {
    private static array $loggers = [];

    final public static function setLogger( string $key, ILogger $value ) {
        self::$loggers[ $key ] = $value;
    }

    final public static function getLogger( string $key ): ILogger {
        return self::$loggers[ $key ];
    }
}

$loggerRegistry = new LoggerRegistry();
$loggerRegistry::setLogger( 'db', new DBLogger() );
$loggerRegistry::setLogger( 'file', new FileLogger() );
$loggerRegistry::setLogger( 'external', new ExternalServiceLogger() );

$messageToLog = 'GOT ERROR';

$loggerRegistry::getLogger( 'db' )->log( $messageToLog );
$loggerRegistry::getLogger( 'file' )->log( $messageToLog );
$loggerRegistry::getLogger( 'external' )->log( $messageToLog );


