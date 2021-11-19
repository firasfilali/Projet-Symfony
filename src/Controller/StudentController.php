<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    /**
     * @Route("/student", name="student")
     */
    public function index(): Response
    {
        return new Response( "Bonjour");

    }
    /**
     * @Route("/student/{id}", name="affichage_student", requirements={"id"="\d{2}"})
     */
    public function affichageStudent($id): Response
    {
        return new Response( "hello student number ".$id);

    }
    /**
     * @Route("/student/{name}", name="student_name")
     */
    public function voirnom($name): Response
    {
        return $this->render( 'etudiant/etudiant.html.twig',array('nom'=>$name));

    }
    /**
     * @Route("/list", name="liste")
     */
    public function listeEtudiant(){
        //liste des etudiants
        $etudiants = array("ali","med");
        //liste des modules
        $modules = array(
            array("nom" => "symfony",
                "id" => 1,
                "enseignant" => "Ali",
                "nbrheures" => 42,
                "date" => "12-12-2021"),
            array("nom" => "JEE",
                "id" => 2,
                "enseignant" => "Med",
                "nbrheures" => 31,
                "date" => "14-10-2021"),
            array("nom" => "BD",
                "id" => 3,
                "enseignant" => "Islem",
                "nbrheures" => 22,
                "date" => "12-12-2023")
        );
        return $this->render( 'etudiant/list.html.twig',array("ListEtudiants"=>$etudiants,"ListModules"=>$modules));
    }
    /**
     * @Route("/affectation", name="Affectation")
     */
    public function affecter(){
        return $this->render("etudiant/affecter.html.twig");
    }
    /**
     * @Route("/indexFils", name="index_fils")
     */
    public function indexFils(){
        return $this->render("etudiant/index.html.twig");

    }

}
