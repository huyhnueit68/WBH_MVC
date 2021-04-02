<?php

/**
 * Class Model
 */
class Model
{
    /**
     * @var PDO
     */
	protected $conn;

    /**
     * Model constructor.
     */
	function __construct()
	{
		try {
			$this->conn = new PDO("mysql:host=localhost;dbname=".DB_NAME.";charset=UTF8;SET time_zone = 'Asia/Ho_Chi_Minh'", "root","");
    		// set the PDO error mode to exception
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
		}
	}

    /**
     * @param $table
     * @param $value
     * @param null $row
     * @return int
     */
	function insert($table , $value, $row = null){
		if($row != null){$row = rtrim(implode(',',$row),',');}
		$value = rtrim(implode('\',\'',$value),',');
		$value = str_pad($value,strlen($value)+2,'\'',STR_PAD_BOTH);
		$sql = "INSERT INTO ".$table." (".$row.") VALUES (".$value.")";
		$stmt = $this->conn->prepare($sql);
		try{
			if($stmt->execute()){
				return 1;
			}
		} catch(PDOException $e) {
			echo "Lỗi ".$e->getCode();
			return 0;
		}
	}

    /**
     * @param $table
     * @param $setRow
     * @param $setVal
     * @param $cond
     * @return int
     */
	function update($table, $setRow, $setVal, $cond){
		$sql = '';
		if(gettype($setRow) == "string"){
			$sql = "UPDATE ".$table." SET ".$setRow."='".$setVal."' WHERE ".$cond."";
		} else {
			$set = '';
			for($i = 0; $i < count($setRow); $i++){
				$set .= $setRow[$i].'='.'\''.$setVal[$i].'\',';
			}
			$set = rtrim($set,',');
			$sql = "UPDATE ".$table." SET ".$set." WHERE ".$cond."";
		}
		$stmt = $this->conn->prepare($sql);
		try{
			if($stmt->execute()){
				return 1;
			}
		} catch(PDOException $e) {
			echo "Error ".$e->getCode().$e->getMessage();
			return 0;
		}
	}

    /**
     * @param $table
     * @param $cond
     * @return int
     */
	function delete($table, $cond){
		$sql = "DELETE FROM ".$table." WHERE ".$cond."";
		$stmt = $this->conn->prepare($sql);
		try{
			if($stmt->execute()){
				return 1;
			}
		} catch(PDOException $e) {
			echo "Lỗi ".$e->getCode();
			return 0;
		}
	}

    /**
     * @param $what
     * @param $table
     * @param null $cond
     * @param null $option
     * @return array
     */
	function select($what, $table, $cond = null, $option = null){
		if($cond == ''){
			$sql = "SELECT ".$what." FROM ".$table." ".$option;
		} else {
			$sql = "SELECT ".$what." FROM ".$table." WHERE ".$cond." ".$option;
		}
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

    /**
     * @param $sql
     * @return bool
     */
	function exe_query($sql)
	{
		$stmt = $this->conn->prepare($sql);
		try {
			$r = $stmt->execute();
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			die();
		}
		return $r;
	}

    /**
     * @param $sql
     * @return array
     */
	function getListMasp($sql){
		$result = null;
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		foreach($data as $row){
			$result[] = $row['masp'];
		}
		return $result;
	}

    /**
     * @return string
     */
	function getLastInsertID(){
		return $this->conn->lastInsertId();
	}

    /**
     *
     */
	function __destruct()
	{
		$this->conn = null;
	}
}
