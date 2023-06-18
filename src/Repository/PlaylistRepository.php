<?php

namespace App\Repository;

use App\Entity\Playlist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
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
use const CNAME;
use const CNCATEGORIENAME;
use const FCATEGORIES;
use const PFORMATIONS;
use const PIDID;
use const PNAMENAME;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======

<<<<<<< HEAD
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
define("PIDID", "p.id id");
define("PNAMENAME", "p.name name");
define("CNAME", "c.name");
define("PFORMATIONS", "p.formations");
define("CNCATEGORIENAME", "c.name categoriename");
define("FCATEGORIES", "f.categories");
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 5eea30864a5f6b7d0248714e2dc5e256b554c2c0
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
/**
 * @extends ServiceEntityRepository<Playlist>
 *
 * @method Playlist|null find($id, $lockMode = null, $lockVersion = null)
 * @method Playlist|null findOneBy(array $criteria, array $orderBy = null)
 * @method Playlist[]    findAll()
 * @method Playlist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlaylistRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Playlist::class);
    }

    public function add(Playlist $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Playlist $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    
    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
     * Retourne toutes les playlists triées sur le nom de la playlist
     * @param type $ordre
     * @return Playlist[]
     */
    public function findAllOrderByName($ordre): array{
        return $this->createQueryBuilder('p')
                ->leftjoin(PFORMATIONS, 'f')
                ->groupBy('p.id')
                ->orderBy('p.name', $ordre)
                ->getQuery()
                ->getResult(); 
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
     * Retourne toutes les playlists triées sur un champ
     * @param type $champ
     * @param type $ordre
     * @return Playlist[]
     */
    public function findAllOrderBy($champ, $ordre): array{
        return $this->createQueryBuilder('p')
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
                ->select(PIDID)
                ->addSelect(PNAMENAME)
                ->addSelect(CNCATEGORIENAME)
                ->leftjoin(PFORMATIONS, 'f')
                ->leftjoin(FCATEGORIES, 'c')
                ->groupBy('p.id')
                ->addGroupBy(CNAME)
                ->orderBy('p.'.$champ, $ordre)
                ->addOrderBy(CNAME)
<<<<<<< HEAD
=======
=======
                ->select('p.id id')
                ->addSelect('p.name name')
                ->addSelect('c.name categoriename')
                ->leftjoin('p.formations', 'f')
                ->leftjoin('f.categories', 'c')
                ->groupBy('p.id')
                ->addGroupBy('c.name')
                ->orderBy('p.'.$champ, $ordre)
                ->addOrderBy('c.name')
>>>>>>> 5eea30864a5f6b7d0248714e2dc5e256b554c2c0
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
                ->getQuery()
                ->getResult();       
    }

    /**
<<<<<<< HEAD
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
    * Enregistrements dont un champ contient une valeur
    * ou tous les enregistrements si la valeur est vide
    * @param type $champ
    * @param type $valeur
    * @return array
    */
    public function findByContainValue($champ, $valeur): array{
        if($valeur==""){
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
            return $this->findAllOrderByName('ASC');
        }
        return $this->createQueryBuilder('p')
            ->leftjoin(PFORMATIONS, 'f')
            ->where('p.'.$champ.' LIKE :valeur')
            ->setParameter('valeur', '%'.$valeur.'%')
            ->groupBy('p.id')
            ->orderBy('p.name', 'ASC')
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
            return $this->findAllOrderBy('name','ASC');
        }
        return $this->createQueryBuilder('p')
            ->select(PIDID)
            ->addSelect(PNAMENAME)
            ->addSelect(CNCATEGORIENAME)
            ->leftjoin(PFORMATIONS, 'f')
            ->leftjoin(FCATEGORIES, 'c')
            ->where('p.'.$champ.' LIKE :valeur')
            ->setParameter('valeur', '%'.$valeur.'%')
            ->groupBy('p.id')
            ->addGroupBy(CNAME)
            ->orderBy('p.name', 'ASC')
            ->addOrderBy(CNAME)
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
            ->getQuery()
            ->getResult(); 
    }
    
    /**
     * Enregistrements dont un champ contient une valeur
     * Et "table" en paramètre
     * @param type $champ
     * @param type $valeur
     * @param type $table
     * @return array
     */
    public function findByContainValueTable($champ, $valeur, $table): array{
        if($valeur==""){
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
            return $this->findAllOrderByName('ASC');
        }
        return $this->createQueryBuilder('p')
            ->leftjoin(PFORMATIONS, 'f')
            ->leftjoin(FCATEGORIES, 'c')
            ->where('c.'.$champ.' LIKE :valeur')
            ->setParameter('valeur', '%'.$valeur.'%')
            ->groupBy('p.id')                
            ->orderBy('p.name', 'ASC')
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
            return $this->findAllOrderBy('name', 'ASC');
        }
        return $this->createQueryBuilder('p')
            ->select(PIDID)
            ->addSelect(PNAMENAME)
            ->addSelect(CNCATEGORIENAME)
            ->leftjoin(PFORMATIONS, 'f')
            ->leftjoin(FCATEGORIES, 'c')
            ->setParameter('valeur', '%'.$valeur.'%')
            ->groupBy('p.id')                
            ->where('c.'.$champ.' LIKE :valeur')
            ->orderBy('p.name', 'ASC')
            ->addOrderBy(CNAME)
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
            ->getQuery()
            ->getResult();
        
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
    
    /**
     * Retourne toutes les playlists triées sur le nombre de formations     
     * @param type $ordre
     * @return Playlist[]
     */
    public function findAllOrderByNbFormations($ordre): array{
        return $this->createQueryBuilder('p')                
                ->leftjoin(PFORMATIONS, 'f')               
                ->groupBy('p.id')             
                ->orderBy('count(p.name)', $ordre)                
                ->getQuery()
                ->getResult();       
    }
          
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
          
=======
     * Enregistrements dont un champ contient une valeur
     * ou tous les enregistrements si la valeur est vide
     * @param type $champ
     * @param type $valeur
     * @param type $table si $champ dans une autre table
     * @return Playlist[]
     */
    public function findByContainValue($champ, $valeur, $table=""): array{
        if($valeur==""){
            return $this->findAllOrderBy('name', 'ASC');
        }    
        if($table==""){      
            return $this->createQueryBuilder('p')
<<<<<<< HEAD
                    ->select(PIDID)
                    ->addSelect(PNAMENAME)
                    ->addSelect(CNCATEGORIENAME)
                    ->leftjoin(PFORMATIONS, 'f')
                    ->leftjoin(FCATEGORIES, 'c')
                    ->where('p.'.$champ.' LIKE :valeur')
                    ->setParameter('valeur', '%'.$valeur.'%')
                    ->groupBy('p.id')
                    ->addGroupBy(CNAME)
                    ->orderBy('p.name', 'ASC')
                    ->addOrderBy(CNAME)
=======
                    ->select('p.id id')
                    ->addSelect('p.name name')
                    ->addSelect('c.name categoriename')
                    ->leftjoin('p.formations', 'f')
                    ->leftjoin('f.categories', 'c')
                    ->where('p.'.$champ.' LIKE :valeur')
                    ->setParameter('valeur', '%'.$valeur.'%')
                    ->groupBy('p.id')
                    ->addGroupBy('c.name')
                    ->orderBy('p.name', 'ASC')
                    ->addOrderBy('c.name')
>>>>>>> 5eea30864a5f6b7d0248714e2dc5e256b554c2c0
                    ->getQuery()
                    ->getResult();              
        }else{   
            return $this->createQueryBuilder('p')
<<<<<<< HEAD
                    ->select(PIDID)
                    ->addSelect(PNAMENAME)
                    ->addSelect(CNCATEGORIENAME)
                    ->leftjoin(PFORMATIONS, 'f')
                    ->leftjoin(FCATEGORIES, 'c')
                    ->where('c.'.$champ.' LIKE :valeur')
                    ->setParameter('valeur', '%'.$valeur.'%')
                    ->groupBy('p.id')
                    ->addGroupBy(CNAME)
                    ->orderBy('p.name', 'ASC')
                    ->addOrderBy(CNAME)
=======
                    ->select('p.id id')
                    ->addSelect('p.name name')
                    ->addSelect('c.name categoriename')
                    ->leftjoin('p.formations', 'f')
                    ->leftjoin('f.categories', 'c')
                    ->where('c.'.$champ.' LIKE :valeur')
                    ->setParameter('valeur', '%'.$valeur.'%')
                    ->groupBy('p.id')
                    ->addGroupBy('c.name')
                    ->orderBy('p.name', 'ASC')
                    ->addOrderBy('c.name')
>>>>>>> 5eea30864a5f6b7d0248714e2dc5e256b554c2c0
                    ->getQuery()
                    ->getResult();              
            
        }           
    }    


    
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
}
