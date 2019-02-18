# silverstripe-globalanchors

A SilverStripe module that allows developers to define a static list of global html anchors - #nav, #content, etc - allowing them to be used for constructing links and etc by CMS users.

Intended to work inconjunction with modules that allow users to build links, or extending the create link functions in WYSIWYG editor, making global anchors available for link construction rather than only anchors within that content area.

## Requirements

SilverStripe 4

## Installation

`composer require fromholdio/silverstripe-globalanchors`

No anchors are setup by default - to complete the install, you need to setup your anchors config:

```yml
Fromholdio\GlobalAnchors\GlobalAnchors:
  anchors:
    nav: 'Main Navigation'
    content: 'Page Content'
    footer: 'Footer'
```

## Usage example

Documentation will be forthcoming, but also, it's just one class and pretty lean. Check the class itself to see all options at the moment.

Key uses are below:

### Use to fuel values in a dropdown

```php
DropdownField::create(
    'GlobalAnchorKey',
    'Global Anchor',
    GlobalAnchors::get_anchors()
);
```

### Get anchor title from saved key

```php
$key = $this->GlobalAnchorKey;
$anchorTitle = GlobalAnchors::get_anchor_title($key);
```

