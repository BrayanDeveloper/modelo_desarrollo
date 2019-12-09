<?php
	/**
	 *
	 */
	 error_reporting(E_ALL);
	 ini_set('display_errors', '1');
	class Connection
	{
		public static function conect()
		{
			//$bd = pg_connect("host=localhost port=5432 dbname=counter user=freenet password=Ufps160520.");
			$bd = pg_connect("host=localhost port=5432 dbname=nuestracop user=postgres password=nuestracop19");
			if (!$bd)
			{
			  echo 'Failed connecting to postgres database '.$bd;
			  exit();
			}
			else
			{
				//echo "Conexiòn exitosa!";
				return $bd;
			}
		}
	}

	Connection::conect();
?>