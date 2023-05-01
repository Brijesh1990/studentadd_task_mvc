<?php 
class model 
{
    public $connection="";
    public function __construct()
    {
        try 
        {
        $this->connection=new mysqli("localhost","root","","crudapp1");
    
        }
        catch(Exception $e)
        {
            die(mysqli_error($this->connection));
        }

    }
    // fetch all data create a member functions
    public function selectalldata($table)
    {
        $select="select * from $table";
        $exe=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

      // fetch and join data create a member functions
      public function joindata($table,$table1,$where)
      {
          $select="select * from $table join $table1 on $where";
          $exe=mysqli_query($this->connection,$select);
          while($fetch=mysqli_fetch_array($exe))
          {
              $arr[]=$fetch;
          }
          return $arr;
      }

    // insert all data create a member functions 
    public function insalldata($table,$data)
    {
        $column=array_keys($data);
        $column1=implode(",",$column);

        $value=array_values($data);
        $value1=implode("','",$value);
       //echo  $insert="insert into $table($column1) values('$value1')"; exit();
       $insert="insert into $table($column1) values('$value1')";
        $exe=mysqli_query($this->connection,$insert);
        return $exe;
    }
}
?>