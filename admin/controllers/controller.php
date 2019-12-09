<?php 

    class MVCcontroller
    {
        public function template()
        {
            include "views/template.php";
        }

        /*====================================
            INCLUIR LA VISTA DEL PROYECTO 
        =====================================*/
        public function enlacesController()
        {
            if(isset($_SESSION['user']))
			{
				if(isset($_GET['view']))
				{
					$enlaces = $_GET['view'];
				}
				else
				{
					$enlaces = "dashboard";
				}
			}
			else
			{
				$enlaces = "login";
			}
            

            $respuesta = Model::enlacesModel($enlaces);
            include $respuesta;
        }

        /*====================================
            INCLUIR LOS SCRIPTS DEL PROYECTO 
        =====================================*/
        public function scriptsController()
        {
            if(isset($_SESSION['user']))
            {
                if (isset($_GET['view'])) 
				{
					$enlaces = $_GET['view'];
				}
				else
				{
					$enlaces = "dashboard";
				}
			}
			else
			{
				$enlaces = "login";
			}

            $respuesta = Model::scriptsModel($enlaces);
            if($respuesta != "nothing")
            {
                $res = "<script src='".$respuesta."'></script>";
                return $res;
            }
                 
		}
		
		public function users()
		{
			
			$user = Data::query("SELECT * FROM admins");
			

			$respuesta = '';

			if(pg_num_rows($user) > 0)
			{

				while($row = pg_fetch_object($user))
				{
					$respuesta .= '<tr>
							<td>'.$row->id_admin.'</td>
							<td>'.$row->name.'</td>
							<td>'.$row->email.'</td>
							<td>'.$row->type.'</td>
							<td>'.$row->state.'</td>
							<td>'.$row->created_date.'</td>
							<td>
								<a class="btn btn-warning edit" data-id="'.$row->id_admin.'"><i class="fa fa-edit (alias) text-white"></i></a>
								<a class="btn btn-danger delete" data-id="'.$row->id_admin.'"><i class="fa fa-trash text-white"></i></a>
							</td>
					</tr>';
				}

			}
			else
			{
				$respuesta .= '<tr><td colspan = "7" class = "text-center">No hay usuarios registrados</td></tr>';
				
			}

			echo $respuesta;
		}
    }    

?>