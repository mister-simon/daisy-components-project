# Welcome!

This is a work in progress!

This project provides an example setup and usages of blade [Daisy Components](https://github.com/mister-simon/daisy-components).


## Note

This is still in development - notice that the composer file currently contains:

```json
"repositories": [
    {
        "type": "path",
        "url": "../daisy-components"
    }
],
```

Eventually I intend to make that package available via composer... But for now if you want to actually run this project locally with the daisy-components package you will need to find your own way around that. 

## Where to look next?

To get started - Check out `resources/views/index.blade.php`.

This page contains includes for each component covered by the package. E.g. `resources/views/buttons.blade.php` contains a bunch of example buttons.

You'll notice that the components are unprefixed, like `<x-button>`, that's due to the config file `config/daisy-components.php`, which sets the prefix to `null`.

If you're copying out any of these examples, make sure you use the appropriate prefixing or config setup.

## That's all

Enjoy!
