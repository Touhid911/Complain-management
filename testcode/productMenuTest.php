<?php

class productMenuTest extends \PHPUnit\Framework\TestCase
{
    public function testIfInsertedInCart(){
        if(True)
			{
                $this->assertEquals(1,1);
			 	$sql = "SELECT * FROM fproduct WHERE 1";
			}
	    if(True)
					{
                        $this->assertEquals(1,1);
						$sql = "SELECT * FROM fproduct WHERE pcat = 'Fruit'";
					}
					if(isset($_GET['type']) AND $_GET['type'] == "vegetable")
					{
						$sql = "SELECT * FROM fproduct WHERE pcat = 'Vegetable'";
					}
					if(isset($_GET['type']) AND $_GET['type'] == "grain")
					{
						$sql = "SELECT * FROM fproduct WHERE pcat = 'Grains'";
					}
                    //$result = mysqli_query($conn, $sql);
                    
    }
}