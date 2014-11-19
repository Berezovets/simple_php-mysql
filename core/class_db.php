<?php
class MyDB {
        private $db = null;
        private $result = null; 
 

        public function __construct($host, $user, $password, $base)
        {
                $this->db = new mysqli($host, $user, $password, $base);
                
        } 
         
        public function query($query)
        {
                if(!$this->db)
                        return false; 
 
                if(is_object($this->result))
                        $this->result->free(); 
 
 
                $this->result = $this->db->query($query); 
 
                if($this->db->errno)
                        die("mysqli error #".$this->db->errno.": ".$this->db->error); 
 
 
                if(is_object($this->result))
                {
                        while($row = $this->result->fetch_array())
                                $data[] = $row;
                        
                        return $data;
                } 
 
                else if($this->result == FALSE)
                        return false;
 
                else return $this->db->affected_rows;
        }
        
        
        public function close()
        {
		  $this->db->mysqli_close; 
	    }	
	    
	    public function stop() 
	    {
         unset($this->result);
        }
}

/*
$db1 = new Test("localhost", "root", "123456", "my_test");
$data = $db1->query("SELECT.....");
*/

?>
