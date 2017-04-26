# tiu-mail

Get blizko.ru orders and messages from mailbox.

## REQUIREMENTS

* [php imap extension](http://php.net/manual/imap.setup.php)

## Install via Composer

Run the following command

```bash
$ composer require tpmanc/blizko-mailbox "*"
```

or add

```bash
$ "tpmanc/blizko-mailbox": "*"
```

to the require section of your `composer.json` file.

## Usage

```php
$blizko = new tpmanc\blizko\Blizko('{imap.yandex.ru:993/imap/ssl}INBOX', 'login@ya.ru', 'password');
$blizko = $blizko->setLimit(50); // set mail count per page (default = 20)
$pageCount = $blizko->getPageCount(); // get page count
$blizko = $blizko->getByPage(0); // find blizko emails on first page

$orders = $blizko->getOrders(); // get array of user orders

$blizko->close();
```

### Order object

Info about user order

```php
...

$orders = $blizko->getOrders(); // get array of user orders
foreach ($orders as $order) {
    echo 'blizko id: ' . $message->getId();
    echo 'name: ' . $message->getUsername();
    echo 'link: ' . $message->getLink();
}
...
```
