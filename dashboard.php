<?php
session_start();
include "header.php";
include "nav.php";

if (!isset($_SESSION['user_logged_in'])) {
    header("Location: index.php");
    exit;
}

///page selector
$page = isset($_GET['page'])? $_GET['page'] : "home";
switch ($page) {
    case 'profil' : include "profil.php"; break;
    case 'mastermhs' : include "mastermhs.php"; break;
    case 'mastermtk'  : include "mastermtk.php"; break;
    case 'editmhs' : include "editmhs.php"; break;
    case 'editmtk' : include "editmtk.php"; break;
    case 'editnilai' : include "editnilai.php"; break;
    case 'deletemhs'  : include "deletemhs.php"; break;
    case 'deletemtk'  : include "deletemtk.php"; break;
    case 'deletenilai'  : include "deletenilai.php"; break;
    case 'tambahmhs'  : include "tambahmhs.php"; break;
    case 'tambahmtk'  : include "tambahmtk.php"; break;
    case 'entri' : include "entri_nilai.php"; break;
    case 'nilai'  : include "nilai.php"; break;
    case 'home' :
    default     : include "home.php";
}


?>