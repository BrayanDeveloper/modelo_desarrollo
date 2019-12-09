<?php 
	require_once 'conexion.php';
	/**
	 * 
	 */
	class Data extends Connection
	{
		
		public static function query($query)
		{
			$result = pg_query(Connection::conect(), $query);
			if (!$result) 
			{
				$error = "Error ";
				return $error.pg_last_error(Connection::conect());
			}
			else
			{
				return $result;
			}
			//pg_close(Connection::conectar());
        }
        
		public static function insert($table, $params)
		{
			$result = pg_insert(Connection::conect(), $table, $params);
			return $result;
		}
	}
?>