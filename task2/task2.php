<?php

interface Logger
{
    public function log($message);
}

class FileLogger implements Logger
{
    private $logFileName;

    public function __construct($logFileName)
    {
        $this->logFileName = $logFileName;
    }

    public function log($message)
    {
        $formattedMessage = "[" . date('Y-m-d H:i:s') . '.' .
         sprintf("%03d", round(microtime(true) * 1000) % 1000) . "] " 
        . $message . PHP_EOL;

    }
}

class ConsoleLogger implements Logger
{
    public function log($message)
    {
        echo "[" . date('Y-m-d H:i:s') . "] " . $message . PHP_EOL;
    }
}


$fileLogger = new FileLogger('app.log');
$fileLogger->log("This is a log message from FileLogger.");

$consoleLogger = new ConsoleLogger();
$consoleLogger->log("This is a log message from ConsoleLogger.");


?>?