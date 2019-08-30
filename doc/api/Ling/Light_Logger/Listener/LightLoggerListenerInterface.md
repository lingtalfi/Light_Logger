[Back to the Ling/Light_Logger api](https://github.com/lingtalfi/Light_Logger/blob/master/doc/api/Ling/Light_Logger.md)



The LightLoggerListenerInterface class
================
2019-08-01 --> 2019-08-30






Introduction
============

The LightLoggerListenerInterface interface is the interface for all logger listeners.

A logger listener first subscribes to the LightLoggerService class for a given channel.

Then when the Logger service emits messages on that channel, the logger listener reacts to this message.

The behaviour of the logger listener (how the logger listener reacts to the message) is defined in the concrete
implementations of this interface.



Class synopsis
==============


abstract class <span class="pl-k">LightLoggerListenerInterface</span> implements [UniversalLoggerInterface](https://github.com/lingtalfi/UniversalLogger) {

- Inherited methods
    - abstract public UniversalLoggerInterface::log(?$message, string $channel) : void

}






Methods
==============

- UniversalLoggerInterface::log &ndash; Sends a the log $message to the given $channel.





Location
=============
Ling\Light_Logger\Listener\LightLoggerListenerInterface<br>
See the source code of [Ling\Light_Logger\Listener\LightLoggerListenerInterface](https://github.com/lingtalfi/Light_Logger/blob/master/Listener/LightLoggerListenerInterface.php)



SeeAlso
==============
Previous class: [LightFileLoggerListener](https://github.com/lingtalfi/Light_Logger/blob/master/doc/api/Ling/Light_Logger/Listener/LightFileLoggerListener.md)<br>
