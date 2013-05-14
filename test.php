<?php

include 'parser.php';
$parser = new FullnameParser("Mr. Anunay K. Dahal II");
$namedata = $parser->getNamePartials();
print_r($namedata);
