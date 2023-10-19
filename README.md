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

To get started - Check out `resources/views/pages/index.blade.php`.

This page contains includes for each component covered by the package. E.g. `resources/views/sections/buttons.blade.php` contains a bunch of example buttons.

You'll notice that the components are unprefixed, like `<x-button>`, that's due to the config file `config/daisy-components.php`, which sets the prefix to `null`.

If you're copying out any of these examples, make sure you use the appropriate prefixing or config setup.

## That's all

Enjoy!


# Notes to self

- [ ] Layout
- [ ] Navigation
- [ ] Mockup
- [ ] Improve navigation some more eventually
- [ ] Work out how to tree-shake styles better
  - Run a command to generate a list of used components / attributes+options, import as json into tailwind whitelist?

# Problems / solutions?

- Dropdowns feel a little messy, currently requiring both slots, but not massively making use of them.
  - Would be nice to make summary more compatible with button components, etc.
- `@php($optionalSlot ??= new \Illuminate\View\ComponentSlot())` This could prove extremely useful.
  - Possible to leverage this to accept attributes / other props?
  - `@php($nameSlot ??= new \Illuminate\View\ComponentSlot($attributes->get('name')))`
