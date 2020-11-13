## SimpleConfig

A simple way to configure a few global variables in SonataAdmin.
Define them in YAML, let users edit them in the admin interface.

__Status: Work in progress, not yet implemented__

### Installation

Simply `composer require bitscout/simple-config` and then add this line to your `bundles.php`:

```
Bitscout\SimpleConfig\BitscoutSimpleConfigBundle::class => ['all' => true],
```

### Configuration

Create the file `config/packages/bitscout_simple_config.yaml`:

```
bitscout_simple_config:
  fields:
    foo:
      label: Fubar
      type: int
```
