<?php

$html = '<a href="https://hcode.com.br/blog">Acesse</a>';

//echo htmlentities($html);

$db = "&lt;a href=&quot;https://hcode.com.br/blog&quot;&gt;Acesse&lt;/a&gt;";

echo html_entity_decode($db);