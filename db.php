<?php


class db{
public $connection;
public $query;
public $sql;
public function __construct()
{
$this->connection = mysqli_connect(SERVER,USER,PASS,DBNAME);
}
public function select ($table,$column){
 $this->sql="SELECT $column FROM $table";
 return $this;
 }
 
 public function where($column,$compair,$value){
 $this->sql . = "WHERE $column $compair $value";
   return $this;
 }
 public function andwhere($column,$compair,$value){
 $this->sql . = "AND $column $compair $value";
   return $this;
 }
 public function orwhere($column,$compair,$value){
 $this->sql . = "OR  $column $compair $value";
   return $this;
 }
 public function getall(){
 $this->query = mysqli_query($this-›connnection, $this->sql);
 while($row = mysqli_fetch_assoc($this->query)){
 $data[] = $row;
 }
 return $data;
 }
 public function getrow(){
 $this->query = mysqli_query($this-›connnection, $this->sql);
 $row = mysql_fetch_assoc($this->query);
 return $row;

 }
 public function insert($table,$data){ 
 $columns= ""
 $values= ""
 foreach($data as $key=> $value){
 $column .= " `$key`  ,";
 $values .= " '$value' ,";
    }
 $columns = rtrim($columns,",");
 $values = rtrim($values,",");
    

 }
$this->sql = "INSERT INTO $table ($columns) VALUES ($values)";
return $this;



public function excute(){
 $this->query= mysqli_query($this->connection,$this->sql);
 if(mysqli_affected_rows($this->connection) > 0){
 return true;
 }else{
 return false;
 }
}

}

