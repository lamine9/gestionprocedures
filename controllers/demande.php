<?php
    include "../models/DemandeDAO.php";
    $demandedao = new DemandeDAO();

    if (isset($_GET['action'])){
        switch ($_GET['action']){
            case 'list':
                session_start();
                $_SESSION['demandes'] = $demandedao->findAll();
                header("Location: ../views/index.php");
                break;
            case 'add':
                header("Location: ../views/add.php");
                break;

            case 'show':
                break;

            case 'delete':
                break;

            default:

        }
    }

    if (isset($_POST['action'])){
        switch ($_POST['action']){
            case 'add':
                $demandedao->add($_POST);
                header("Location: http://localhost/gestionprocedures/controllers/demande.php?action=list");
                break;

            case 'update':
                break;

            default:
        }
    }