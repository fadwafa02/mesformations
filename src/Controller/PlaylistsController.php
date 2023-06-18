<?php
namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\FormationRepository;
use App\Repository\PlaylistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
<<<<<<< HEAD
use const PLAYLISTSPATH;

define("PLAYLISTSPATH", "pages/playlists.html.twig");
=======
<<<<<<< HEAD
use const PLAYLISTSPATH;

define("PLAYLISTSPATH", "pages/playlists.html.twig");
=======
<<<<<<< HEAD
use const PLAYLISTSPATH;

define("PLAYLISTSPATH", "pages/playlists.html.twig");
=======
<<<<<<< HEAD
use const PLAYLISTSPATH;

define("PLAYLISTSPATH", "pages/playlists.html.twig");
=======

<<<<<<< HEAD
define("PLAYLISTSPATH", "pages/playlists.html.twig");
=======
>>>>>>> 5eea30864a5f6b7d0248714e2dc5e256b554c2c0
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
/**
 * Description of PlaylistsController
 *
 * @author emds
 */
class PlaylistsController extends AbstractController {
    
    /**
     * 
     * @var PlaylistRepository
     */
    private $playlistRepository;
    
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
    
    function __construct(PlaylistRepository $playlistRepository, 
            CategorieRepository $categorieRepository,
            FormationRepository $formationRespository) {
        $this->playlistRepository = $playlistRepository;
        $this->categorieRepository = $categorieRepository;
        $this->formationRepository = $formationRespository;
    }
    
    /**
     * @Route("/playlists", name="playlists")
     * @return Response
     */
    public function index(): Response{
<<<<<<< HEAD
        $playlists = $this->playlistRepository->findAllOrderByName('ASC');
=======
<<<<<<< HEAD
        $playlists = $this->playlistRepository->findAllOrderByName('ASC');
=======
<<<<<<< HEAD
        $playlists = $this->playlistRepository->findAllOrderByName('ASC');
=======
        $playlists = $this->playlistRepository->findAllOrderBy('name', 'ASC');
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
        $categories = $this->categorieRepository->findAll();
        return $this->render("pages/playlists.html.twig", [
            'playlists' => $playlists,
            'categories' => $categories            
        ]);
    }

    /**
     * @Route("/playlists/tri/{champ}/{ordre}", name="playlists.sort")
     * @param type $champ
     * @param type $ordre
     * @return Response
     */
    public function sort($champ, $ordre): Response{
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
        switch($champ){
            case "name":
                $playlists = $this->playlistRepository->findAllOrderByName($ordre);
                break;
            case "nbformations":
                $playlists = $this->playlistRepository->findAllOrderByNbFormations($ordre);
                break;
        }
        $categories = $this->categorieRepository->findAll();
        return $this->render(PLAYLISTSPATH, [
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
        $playlists = $this->playlistRepository->findAllOrderBy($champ, $ordre);
        $categories = $this->categorieRepository->findAll();
<<<<<<< HEAD
        return $this->render(PLAYLISTSPATH, [
=======
<<<<<<< HEAD
        return $this->render(PLAYLISTSPATH, [
=======
        return $this->render("pages/playlists.html.twig", [
>>>>>>> 5eea30864a5f6b7d0248714e2dc5e256b554c2c0
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
            'playlists' => $playlists,
            'categories' => $categories            
        ]);
    }         
    
    /**
     * @Route("/playlists/recherche/{champ}/{table}", name="playlists.findallcontain")
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
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
        if ($table != ""){
        $playlists = $this->playlistRepository->findByContainValueTable($champ, $valeur, $table);
        }else{
            $playlists = $this->playlistRepository->findByContainValue($champ, $valeur);
        }
        $categories = $this->categorieRepository->findAll();
        return $this->render(PLAYLISTSPATH, [
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
        $playlists = $this->playlistRepository->findByContainValue($champ, $valeur, $table);
        $categories = $this->categorieRepository->findAll();
<<<<<<< HEAD
        return $this->render(PLAYLISTSPATH, [
=======
        return $this->render("pages/playlists.html.twig", [
>>>>>>> 5eea30864a5f6b7d0248714e2dc5e256b554c2c0
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
            'playlists' => $playlists,
            'categories' => $categories,            
            'valeur' => $valeur,
            'table' => $table
        ]);
    }  
    
    /**
     * @Route("/playlists/playlist/{id}", name="playlists.showone")
     * @param type $id
     * @return Response
     */
    public function showOne($id): Response{
        $playlist = $this->playlistRepository->find($id);
        $playlistCategories = $this->categorieRepository->findAllForOnePlaylist($id);
        $playlistFormations = $this->formationRepository->findAllForOnePlaylist($id);
        return $this->render("pages/playlist.html.twig", [
            'playlist' => $playlist,
            'playlistcategories' => $playlistCategories,
            'playlistformations' => $playlistFormations
        ]);        
    }       
    
}
