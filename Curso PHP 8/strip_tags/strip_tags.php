<?php

$comentario = 'Olá <a href="#"><strong>Hcode</strong></a>!';

echo strip_tags($comentario, "<strong><a>");