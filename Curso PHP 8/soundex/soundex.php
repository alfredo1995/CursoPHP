<?php

$original = "Bob";

$search = "Pop";

var_dump(soundex($original) == soundex($search));
