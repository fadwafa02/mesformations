<?php
namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\FormationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

<<<<<<< HEAD
define("FORMATIONSPATH", "pages/formations.html.twig");

=======
<<<<<<< HEAD
define("FORMATIONSPATH", "pages/formations.html.twig");

=======
<<<<<<< HEAD
define("FORMATIONSPATH", "pages/formations.html.twig");

=======
<<<<<<< HEAD
define("FORMATIONSPATH", "pages/formations.html.twig");

=======
<<<<<<< HEAD
define("FORMATIONSPATH", "pages/formations.html.twig");

=======
<<<<<<< HEAD
define("FORMATIONSPATH", "pages/formations.html.twig");

=======
>>>>>>> 5eea30864a5f6b7d0248714e2dc5e256b554c2c0
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
>>>>>>> 16a443d0cf4f73ad29871a54d73c1b7af6cf32ca
/**
 * Controleur des formations
 *
 * @author emds
 */
class FormationsController extends AbstractController {

<<<<<<< HEAD
    
=======
<<<<<<< HEAD
    
=======
<<<<<<< HEAD
    
=======
<<<<<<< HEAD
    
=======
<<<<<<< HEAD
    
=======
<<<<<<< HEAD
    
=======
>>>>>>> 5eea30864a5f6b7d0248714e2dc5e256b554c2c0
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
>>>>>>> 16a443d0cf4f73ad29871a54d73c1b7af6cf32ca
    /**
     * 
     * @var FormationRepository
     */
    private $formationRepository;
    
    /**
     * 
     * @var CategorieRepository
     */
    private $categorieRepository;
    
    function __construct(FormationRepository $formationRepository, CategorieRepository $categorieRepository) {
        $this->formationRepository = $formationRepository;
        $this->categorieRepository= $categorieRepository;
    }
    
    /**
     * @Route("/formations", name="formations")
     * @return Response
     */
    public function index(): Response{
        $formations = $this->formationRepository->findAll();
        $categories = $this->categorieRepository->findAll();
        return $this->render("pages/formations.html.twig", [
            'formations' => $formations,
            'categories' => $categories
        ]);
    }

    /**
     * @Route("/formations/tri/{champ}/{ordre}/{table}", name="formations.sort")
     * @param type $champ
     * @param type $ordre
     * @param type $table
     * @return Response
     */
    public function sort($champ, $ordre, $table=""): Response{
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
>>>>>>> 16a443d0cf4f73ad29871a54d73c1b7af6cf32ca
        if($table !=""){
            $formations = $this->formationRepository->findAllOrderByTable($champ, $ordre, $table);
        }else 
        {
            $formations = $this->formationRepository->findAllOrderBy($champ, $ordre);
        }
        $categories = $this->categorieRepository->findAll();
        return $this->render(FORMATIONSPATH, [
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
        $formations = $this->formationRepository->findAllOrderBy($champ, $ordre, $table);
        $categories = $this->categorieRepository->findAll();
<<<<<<< HEAD
        return $this->render(FORMATIONSPATH, [
=======
        return $this->render("pages/formations.html.twig", [
>>>>>>> 5eea30864a5f6b7d0248714e2dc5e256b554c2c0
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
>>>>>>> 16a443d0cf4f73ad29871a54d73c1b7af6cf32ca
            'formations' => $formations,
            'categories' => $categories
        ]);
    }     
    
    /**
     * @Route("/formations/recherche/{champ}/{table}", name="formations.findallcontain")
     * @param type $champ
     * @param Request $request
     * @param type $table
     * @return Response
     */
    public function findAllContain($champ, Request $request, $table=""): Response{
        $valeur = $request->get("recherche");
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
>>>>>>> 16a443d0cf4f73ad29871a54d73c1b7af6cf32ca
        if($table !=""){
            $formations = $this->formationRepository->findByContainValueTable($champ, $valeur, $table);
        }else{
            $formations = $this->formationRepository->findByContainValue($champ, $valeur);
        }
        $categories = $this->categorieRepository->findAll();
        return $this->render(FORMATIONSPATH, [
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
        $formations = $this->formationRepository->findByContainValue($champ, $valeur, $table);
        $categories = $this->categorieRepository->findAll();
<<<<<<< HEAD
        return $this->render(FORMATIONSPATH, [
=======
        return $this->render("pages/formations.html.twig", [
>>>>>>> 5eea30864a5f6b7d0248714e2dc5e256b554c2c0
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
>>>>>>> 16a443d0cf4f73ad29871a54d73c1b7af6cf32ca
            'formations' => $formations,
            'categories' => $categories,
            'valeur' => $valeur,
            'table' => $table
        ]);
    }  
    
    /**
     * @Route("/formations/formation/{id}", name="formations.showone")
     * @param type $id
     * @return Response
     */
    public function showOne($id): Response{
        $formation = $this->formationRepository->find($id);
        return $this->render("pages/formation.html.twig", [
            'formation' => $formation
        ]);        
    }   
    
}
