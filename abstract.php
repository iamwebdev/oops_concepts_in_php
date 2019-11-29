<?php
include 'Org.php';
abstract class Library extends Database
{
	public $a = 0;
	public abstract function totalBooks($tablename);
	public abstract function booksAddedToday($tablename,$column,$field);
	public abstract function booksbyAuthor($tablename,$field,$column,$value);
	public abstract function booksbyLessQuantity($tablename,$field,$column);
	public abstract function bookStatus($tablename,$field,$column,$value);
	public function a()
	{
		echo "hello";
	}
}
class Books extends Library
{
	public function totalBooks($tablename)
	{
		$stmt=$this->db->prepare("Select Count(*) as total from ".$tablename."");
		$stmt->execute();
		$row=$stmt->fetch();
		echo "Total No of Books in Library is ".$row['total'];
	}
	public function booksAddedToday($tablename,$column,$field)
	{
		$stmt=$this->db->prepare("Select ".$column." from ".$tablename." where ".$field." = '".date('Y-m-d')."'");
		//print_r($stmt);
		$stmt->execute();
		$row=$stmt->fetchAll();
		echo"<pre>",print_r($row,true),"</pre>"; 
	}
	public function booksbyAuthor($tablename,$field,$column,$value)
	{
		$stmt=$this->db->prepare("Select ".$field." from ".$tablename." where ".$column." = '".$value."'");
		//print_r($stmt);
		$stmt->execute();
		$row=$stmt->fetch();
		echo"<pre>",print_r($row,true),"</pre>";
	}
	public function booksbyLessQuantity($tablename,$field,$column)
	{
		$stmt=$this->db->prepare("Select ".$field." from ".$tablename." where ".$column." <10");
		$stmt->execute();
		$row=$stmt->fetchAll();
		echo "<pre>",print_r($row,true),"</pre>";
	}
	public function bookStatus($tablename,$field,$column,$value)
	{
		$stmt=$this->db->prepare("Select ".$field." from ".$tablename." where ".$column." = '".$value."'");
		$stmt->execute();
		$row=$stmt->fetchAll();
		echo"<pre>",print_r($row,true),"</pre>";
	}
}
$obj=new Books();
$obj->setConfig('localhost','organisation','root','');
$obj->connect();
// $obj->totalBooks('tbl_books');
// $obj->booksAddedToday('tbl_books','sbook_name','sbook_added_date');
// $obj->booksbyAuthor('tbl_books','sbook_name','sbook_author','Amrit');
// $obj->booksbyLessQuantity('tbl_books','sbook_name','sbook_count');
// $obj->bookStatus('tbl_books','sbook_name','sbook_status','Unsold');
?>