<?php
require_once '../parser.php';

class FullnameParserTest extends PHPUnit_Framework_TestCase
{
    /**
     * @group Travis
     */
    public function testGetFullnameParts()
    {

        $original_name = "Mr. Anunay K. Dahal II";
        $parser = new FullnameParser($original_name);
        $name_parts = $parser->getNamePartials();
        $fullname = import(" ",$name_parts);
        $original_name_block_count = count(explode(" ",$original_name));
        $parsed_name_block_count = count($name_parts);

        $this->assertEquals($original_name, $fullname);
        $this->assertEquals($original_name_block_count,$parsed_name_block_count);
    }

}
?>
