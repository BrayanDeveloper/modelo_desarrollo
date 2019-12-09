<?php 
	// error_reporting(E_ALL);
	// ini_set('display_errors', '1');
	session_start();
	include 'crud.php';
	switch ($_REQUEST['type']) 
	{
		case 'login':
            $data = getFormData($_POST['data']);
            $login = Data::query("SELECT * FROM users WHERE state !='deleted' and state !='inactive' and email = '".$data[0]->email."'");
            if(pg_num_rows($login) > 0)
            {
                $flogin = pg_fetch_object($login);
                if(password_verify($data[1]->pass, $flogin->pass))
                {
                    $_SESSION['user'] = $flogin;
                    $resp = array('error' => 0, 'message' => 'Bienvenido '.$flogin->name);
                }
                else
                {
                    $resp = array('error' => 1, 'message' => 'Contraseña errónea');
                }
            }
            else
            {
                $resp = array('error' => 1, 'message' => 'Usuario no registrado');
            }
           echo json_encode($resp);
        break;
        
        case 'edit_profile':
            $data = getFormData($_POST['data']);
            
            // if(isset($data[3]->language))
            // {
            //     $languages = '';
            //     foreach ($data[3]->language as $lang) 
            //     {
            //         $languages .= $lang .',';
            //     }
                 
            //     $save = Data::query("UPDATE users SET  name = '".$data[0]->name."', last_name= '".$data[1]->last_name."', website='".$data[2]->website."', language= '".$languages."', address='".$data[4]->address."', phone='".$data[5]->phone."' WHERE id_user = ".$data[6]->id_user);
            // }
            
			$save = Data::query("UPDATE users SET  name = '".$data[0]->name."', last_name= '".$data[1]->last_name."', website='".$data[2]->website."', language= '".$data[3]->language."', address='".$data[4]->address."', phone='".$data[5]->phone."' WHERE id_user = ".$data[6]->id_user);

        break;
        
        case 'edit_security':
			$data = getFormData($_POST['data']);
			$pass = crypt($data[1]->pass,'$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
			$save = Data::query("UPDATE users SET  email = '".$data[0]->email."', pass= '".$pass."', name_user='".$data[2]->name_user."' WHERE id_user = ".$data[3]->id_user);

			// echo "UPDATE users SET  email = '".$data[0]->email."', pass= '".$pass."', name_user='".$data[2]->name_user."' WHERE id_user = ".$data[3]->id_user;
        break;
    }
    
    function getFormData($form)
	{
		$tempar = array();
		$form = urldecode($form);
		$frm = explode("&", $form);
		for($i = 0; $i < count($frm); $i++)
		{
			$temp = explode("=", $frm[$i]);
			array_push($tempar, array($temp[0] => $temp[1]));
		}
		$data = json_encode($tempar);
		return json_decode($data);
	}
?>