<?php
   class mobile
   {
	    var $price;
		var $name;
		public function setprice($param)
		{
			$this->price=$param;
		}
		public function getprice()
		{
			echo $this->price.'<br>';
		}
		public function setname($param)
		{
			$this->name=$param;
		}
		public function getname()
		{
			echo $this->name.'<br>';
		}
   }
   $obj=new mobile();
   $obj->setprice("Samsumg Note 5");
   $obj->getprice("");
   $obj2=new mobile();
   $obj2->setname("100000");
   $obj2->getname();
?>