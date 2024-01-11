# Casa Luna Core Functionality Plugin

![GitHub Release](https://img.shields.io/github/v/release/Herm71/casaluna-core-functionality?logo=github) ![GitHub issues](https://img.shields.io/github/issues/Herm71/casaluna-core-functionality?logo=github)

This the core functionality plugin for the **Casa Luna** website. This theme independent plugin keeps, custom post-types, short-codes and other site-based functions out of the theme's code. This ensures that a future theme change does not affect the site's core functionality.

This is plugin provides the following functionality in the following files:

* `general.php` -- for any general functions you would write

* `post-types.php` -- for registering custom post types (currently not included)

* `shortcodes.php` -- for writing custom shortcodes

* `disable-xmlrpc.php` -- disables XMLRPC to [prevent `xml-rpc` attacks](https://pantheon.io/docs/wordpress-best-practices#avoid-xml-rpc-attacks), per best practices

* `gtm.php` -- enqueue's Google Tag Manager

* `security-headers` -- Security headers and Content Security Policy
