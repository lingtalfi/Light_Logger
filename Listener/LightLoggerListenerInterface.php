<?php


namespace Ling\Light_Logger\Listener;


use Ling\UniversalLogger\UniversalLoggerInterface;

/**
 * The LightLoggerListenerInterface interface is the interface for all logger listeners.
 *
 * A logger listener first subscribes to the LightLoggerService class for a given channel.
 *
 * Then when the Logger service emits messages on that channel, the logger listener reacts to this message.
 *
 * The behaviour of the logger listener (how the logger listener reacts to the message) is defined in the concrete
 * implementations of this interface.
 */
interface LightLoggerListenerInterface extends UniversalLoggerInterface
{

}