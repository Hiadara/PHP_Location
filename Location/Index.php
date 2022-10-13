<?php

	if(isset($_GET['page'])) {
		require_once 'menu.php';
		switch ($_GET['page']) {
			case 'addcli':
				require_once 'View/Client/add.php';
				break;
				// Ajout

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
                // Editclient
//***************************************************************
                // Fin Client
//***************************************************************
                // Ajout photocopieur
              	case 'addp':
					require_once 'View/photcop/add.php';
					break;
                //List photocopieur
				case 'listp':
					require_once 'Model/db.php';
					require_once 'Model/photocpie.php';
					$list = listphotocopie();
					if (isset($_GET['key'])){
	                $list = recherche($_GET['key']);
	            }
					require_once 'View/photcop/list.php';
					break;
				//Edit Photocopieur
					case 'editp':
		                require_once 'Model/db.php';
		                require_once 'Model/photocpie.php';

		                $tab = getpByid($_GET['ok']);
		                $link = mysqli_fetch_row($tab);
		                require_once 'View/photcop/edit.php';
		                break;
		}
	}else {
		require_once 'menu.php';
	}
?>