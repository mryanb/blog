---
extends: _layouts.post
section: postContent
title: "How to get the first Friday of the month in PHP"
author: "Ryan Bantz"
---

There is a built in PHP function that will allow you to easily get the first occurance of a particular day within a month. Using [strtotime()](http://php.net/manual/en/function.strtotime.php) you can pass in a string like `first friday YYYY-MM` where YYYY is the 4 digit year and MM is the 2 digit month. Ex: `first wednesday 2018-01`.

Here are a few more examples:
```
<?php

$str = date("F j, Y", strtotime('first friday 2017-04'));       // April 7, 2017

```

