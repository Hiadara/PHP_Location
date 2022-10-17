<?php
	
	if (isset($_GET['page'])) {
		require_once 'menu.php';
			switch ($_GET['page']) {
				case 'admess':
					require_once 'View/Messag/adme.php';
						break;
				//Liste
				case 'listcli':
					require_once 'Model/db.php';
					require_once 'Model/client.php';
					$list = listcli();
					if (isset($_GET['key'])){
                	$list = recherche($_GET['key']);
            	}
				require_once 'View/Client/list.php';
				break;
				// Listclient

				case 'editcli':
                	require_once 'Model/db.php';
                	require_once 'Model/Client.php';

                	$tab = getcliByid($_GET['ok']);
                	$link = mysqli_fetch_row($tab);
                	require_once 'View/Client/edit.php';
                	break;

//========================================================================//
                //Ajout Utilisateur
                	
                case 'adusers':
					require_once 'View/User/aduser.php';
					break;
				
				//List Utilisateur

				case 'listusers':
					require_once 'Model/db.php';
					require_once 'Model/userss.php';
					$list = listusers();
					if (isset($_GET['key'])){
                	$list = recherche($_GET['key']);
            	}
				require_once 'View/User/listuser.php';
				break;

				// Edition Utilisateur

				case 'editusers':
                	require_once 'Model/db.php';
                	require_once 'Model/userss.php';

                	$tab = getusersByid($_GET['ok']);
                	$link = mysqli_fetch_row($tab);
                	require_once 'View/User/edit.php';
                	break;
//========================================================================//
                	//Ajout Theme
                	
                case 'adthemes':
					require_once 'View/Themess/adthems.php';
					break;

				//Liste du theme
				case 'listthems':
					require_once 'Model/db.php';
					require_once 'Model/theme.php';
					$list = listthems();
					if (isset($_GET['key'])){
                	$list = recherche($_GET['key']);
            	}
				require_once 'View/Themess/listhems.php';
				break;

				//Edition Theme
				case 'editthemes':
                	require_once 'Model/db.php';
                	require_once 'Model/theme.php';

                	$tab = getthemesByid($_GET['ok']);
                	$link = mysqli_fetch_row($tab);
                	require_once 'View/Themess/editthem.php';
                	break;

//========================================================================//
                	//Ajout Subject
                	
                case 'adsubject':
					require_once 'View/Subject/addsub.php';
					break;

				//Liste Subject
				case 'listsubject':
					require_once 'Model/db.php';
					require_once 'Model/submode.php';
					$list = listsubject();
					if (isset($_GET['key'])){
                	$list = recherche($_GET['key']);
            	}
				require_once 'View/Subject/listsub.php';
				break;

				//Edition Subject
				case 'editsubjtc':
                	require_once 'Model/db.php';
                	require_once 'Model/submode.php';

                	$tab = getsubjectsByid($_GET['ok']);
                	$link = mysqli_fetch_row($tab);
                	require_once 'View/Subject/edits.php';
                	break; 


//========================================================================//

                	//Ajout Message

                	case 'admesages':
						require_once 'View/Messag/adme.php';
						break;

					//Liste Subject
					case 'listmess':
						require_once 'Model/db.php';
						require_once 'Model/mes.php';
						$list = listmess();
						if (isset($_GET['key'])){
	                	$list = recherche($_GET['key']);
            		}
					require_once 'View/Messag/lists.php';
					break;

				
					//Edition Subject
					case 'editmessage':
	                	require_once 'Model/db.php';
	                	require_once 'Model/mes.php';

	                	$tab = getmessByid($_GET['ok']);
	                	$link = mysqli_fetch_row($tab);
	                	require_once 'View/Messag/edits.php';
	                	break; 

}
	}else{
		require_once 'menu.php';
	}

?>