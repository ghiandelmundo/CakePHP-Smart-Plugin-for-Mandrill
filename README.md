Mandrill Smart Plugin for CakePHP
========

This plugin will implement all Mandrill API calls defined in https://mandrillapp.com/api/1.0/. 

Requirements
------------

* CakePHP 2.x
* PHP 5

Installation
------------

To install the plugin, place the files in a directory labelled "Mandrill/" in your "app/Plugin/" directory.

Setup
-----

To use the Mandrill Plugin its required to include the following two lines in your `/app/Config/bootstrap.php` file.

```php
CakePlugin::load('Mandrill');
Configure::write('Mandrill.api_key', 'YOUR MANDRILL API KEY');
```

Usage
-----

Controllers that will be using Mandrill require the Mandrill Component to be included.

```php
public $components = array('Mandrill.Mandrill');
```

Example

```php

// A function call of
$this->Mandrill->usersInfo(); 

// Will convert to 
https://mandrillapp.com/api/1.0/users/info.json

````

The above example will output:

```php
Array
(
    [username] => someone@domain.com
    [created_at] => 2015-07-23 14:09:52.9542
    [public_id] => 9038493394
    [reputation] => 33
    [hourly_quota] => 25
    [backlog] => 0
    [stats] => Array
        (
            [today] => Array
                (
                    [sent] => 0
                    [hard_bounces] => 0
                    [soft_bounces] => 0
                    [rejects] => 0
                    [complaints] => 0
                    [unsubs] => 0
                    [opens] => 0
                    [unique_opens] => 0
                    [clicks] => 0
                    [unique_clicks] => 0
                )

            [last_7_days] => Array
                (
                    [sent] => 0
                    [hard_bounces] => 0
                    [soft_bounces] => 0
                    [rejects] => 0
                    [complaints] => 0
                    [unsubs] => 0
                    [opens] => 0
                    [unique_opens] => 0
                    [clicks] => 0
                    [unique_clicks] => 0
                )

            [last_30_days] => Array
                (
                    [sent] => 0
                    [hard_bounces] => 0
                    [soft_bounces] => 0
                    [rejects] => 0
                    [complaints] => 0
                    [unsubs] => 0
                    [opens] => 0
                    [unique_opens] => 0
                    [clicks] => 0
                    [unique_clicks] => 0
                )

            [last_60_days] => Array
                (
                    [sent] => 0
                    [hard_bounces] => 0
                    [soft_bounces] => 0
                    [rejects] => 0
                    [complaints] => 0
                    [unsubs] => 0
                    [opens] => 0
                    [unique_opens] => 0
                    [clicks] => 0
                    [unique_clicks] => 0
                )

            [last_90_days] => Array
                (
                    [sent] => 0
                    [hard_bounces] => 0
                    [soft_bounces] => 0
                    [rejects] => 0
                    [complaints] => 0
                    [unsubs] => 0
                    [opens] => 0
                    [unique_opens] => 0
                    [clicks] => 0
                    [unique_clicks] => 0
                )

            [all_time] => Array
                (
                    [sent] => 0
                    [hard_bounces] => 0
                    [soft_bounces] => 0
                    [rejects] => 0
                    [complaints] => 0
                    [unsubs] => 0
                    [opens] => 0
                    [unique_opens] => 0
                    [clicks] => 0
                    [unique_clicks] => 0
                )

        )

)
````

Mandrill API documentation is available at <a href="https://mandrillapp.com/api/docs">https://mandrillapp.com/api/docs</a>


Author
---------

2015 Ghian Del Mundo
