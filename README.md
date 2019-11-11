Light_Logger
===========
2019-08-01



A logger service to use in your [Light](https://github.com/lingtalfi/Light) applications.

This is a [Light plugin](https://github.com/lingtalfi/Light/blob/master/doc/pages/plugin.md).


This is part of the [universe framework](https://github.com/karayabin/universe-snapshot).



Install
==========
Using the [uni](https://github.com/lingtalfi/universe-naive-importer) command.
```bash
uni import Ling/Light_Logger
```

Or just download it and place it where you want otherwise.






Summary
===========
- [Light_Logger api](https://github.com/lingtalfi/Light_Logger/blob/master/doc/api/Ling/Light_Logger.md) (generated with [DocTools](https://github.com/lingtalfi/DocTools))
- [Service](#service)


Service
---------

This plugin provides the following services:

- logger


More info in the description of the [LightLoggerService class](https://github.com/lingtalfi/Light_Logger/blob/master/doc/api/Ling/Light_Logger/LightLoggerService.md).



Here is an example of service configuration:

```yaml
logger:
    instance: Ling\Light_Logger\LightLoggerService
    methods:
        setFormat:
            format: [{channel}]: {dateTime} -- {message}
        setUseExpandedArray:
            bool: true
    methods_collection: []
        -
            method: addListener
            args:
                channels: *
                listener:
                    instance: Ling\Light_Logger\Listener\LightFileLoggerListener
                    methods:
                        configure:
                            options:
                                file: ${app_dir}/log/light_log.log
                minus:
                    - todo
        -
            method: addListener
            args:
                channels: todo
                listener:
                    instance: Ling\Light_Logger\Listener\LightFileLoggerListener
                    methods:
                        configure:
                            options:
                                file: ${app_dir}/log/todo.log
#        -
#            method: addListener
#            args:
#                channels: *
#                listener:
#                    instance: Ling\Light_Logger\Listener\LightLastMessageFileLoggerListener
#                    methods:
#                        setFile:
#                            file: ${app_dir}/log/light_log_last.txt
```



History Log
=============

- 1.6.0 -- 2019-11-11

    - update LightLoggerService->getFormattedMessage, now can log \Exception instances
    
- 1.5.0 -- 2019-10-17

    - add LightLoggerService->addListener minus argument
    
- 1.4.2 -- 2019-10-17

    - update README.md
    
- 1.4.1 -- 2019-10-17

    - add sentence in the documentation
    
- 1.4.0 -- 2019-09-24

    - add LightLastMessageFileLoggerListener
    
- 1.3.0 -- 2019-08-30

    - add LightLoggerService property: useExpandedArray
    
- 1.2.1 -- 2019-08-30

    - update LightLoggerService, now implements UniversalLoggerInterface
    - fix LightLoggerListenerInterface implementing UniversalLoggerInterface
    
- 1.2.0 -- 2019-08-30

    - updated LightLoggerListenerInterface->log to adapt new UniversalLoggerInterface signature
    
- 1.1.0 -- 2019-08-30

    - renamed LightLoggerListenerInterface->listen to log
    - update LightLoggerListenerInterface now extends UniversalLoggerInterface
    
- 1.0.0 -- 2019-08-01

    - initial commit