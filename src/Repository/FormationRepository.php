<?php

namespace App\Repository;

use App\Entity\Formation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

<<<<<<< HEAD
define("FPUBLISHEDAT", "f.publishedAt");
=======
<<<<<<< HEAD
define("FPUBLISHEDAT", "f.publishedAt");
=======
<<<<<<< HEAD
define("FPUBLISHEDAT", "f.publishedAt");
=======
>>>>>>> 5eea30864a5f6b7d0248714e2dc5e256b554c2c0
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
/**
 * @extends ServiceEntityRepository<Formation>
 *
 * @method Formation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Formation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Formation[]    findAll()
 * @method Formation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Formation::class);
    }

    public function add(Formation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Formation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Retourne toutes les formations triées sur un champ
     * @param type $champ
     * @param type $ordre
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
     * @return Formation[]
     */
    public function findAllOrderBy($champ, $ordre): array{
        return $this->createQueryBuilder('f')
                ->orderBy('f.'.$champ, $ordre)
                ->getQuery()
                ->getResult();
    }
    
    /**
     * Retourne toutes les formations triées sur un champ
     * Et sur un champ si autre table
     * @param type $champ
     * @param type $ordre
     * @param type $table
     * @return Formation[]
     */
    public function findAllOrderByTable($champ, $ordre, $table=""): array{
        return $this->createQueryBuilder('f')
                ->join('f.'.$table, 't')
                ->orderBy('t.'.$champ, $ordre)
                ->getQuery()
                ->getResult();
    }
    
<<<<<<< HEAD
=======
=======
     * @param type $table si $champ dans une autre table
     * @return Formation[]
     */
    public function findAllOrderBy($champ, $ordre, $table=""): array{
        if($table==""){
            return $this->createQueryBuilder('f')
                    ->orderBy('f.'.$champ, $ordre)
                    ->getQuery()
                    ->getResult();
        }else{
            return $this->createQueryBuilder('f')
                    ->join('f.'.$table, 't')
                    ->orderBy('t.'.$champ, $ordre)
                    ->getQuery()
                    ->getResult();            
        }
    }

>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
    /**
     * Enregistrements dont un champ contient une valeur
     * ou tous les enregistrements si la valeur est vide
     * @param type $champ
     * @param type $valeur
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
     * @return Formation[]
     */
    public function findByContainValue($champ, $valeur): array{
        if($valeur==""){
            return $this->findAll();
        }
        return $this->createQueryBuilder('f')
                ->where('f.'.$champ.' LIKE :valeur')
                ->orderBy(FPUBLISHEDAT, 'DESC')
                ->setParameter('valeur', '%'.$valeur.'%')
                ->getQuery()
                ->getResult();            
    }
        
    /**
     * Enregistrements selon la valeur contenue dans un champ
     * ou tous les enregistrements si la valeur est vide
     * Et si le champ contient la valeur dans une autre table
     * @param type $champ
     * @param type $valeur
     * @param type $table
     * @return Formation[]
     */
    public function findByContainValueTable($champ, $valeur, $table): array{
        if($valeur==""){
            return $this->findAll();
        }
            return $this->createQueryBuilder('f')
                    ->join('f.'.$table, 't')                    
                    ->where('t.'.$champ.' LIKE :valeur')
                    ->orderBy(FPUBLISHEDAT, 'DESC')
                    ->setParameter('valeur', '%'.$valeur.'%')
                    ->getQuery()
                    ->getResult();  
    }    

<<<<<<< HEAD
=======
=======
     * @param type $table si $champ dans une autre table
     * @return Formation[]
     */
    public function findByContainValue($champ, $valeur, $table=""): array{
        if($valeur==""){
            return $this->findAll();
        }
        if($table==""){
            return $this->createQueryBuilder('f')
                    ->where('f.'.$champ.' LIKE :valeur')
<<<<<<< HEAD
                    ->orderBy(FPUBLISHEDAT, 'DESC')
=======
                    ->orderBy('f.publishedAt', 'DESC')
>>>>>>> 5eea30864a5f6b7d0248714e2dc5e256b554c2c0
                    ->setParameter('valeur', '%'.$valeur.'%')
                    ->getQuery()
                    ->getResult();            
        }else{
            return $this->createQueryBuilder('f')
                    ->join('f.'.$table, 't')                    
                    ->where('t.'.$champ.' LIKE :valeur')
<<<<<<< HEAD
                    ->orderBy(FPUBLISHEDAT, 'DESC')
=======
                    ->orderBy('f.publishedAt', 'DESC')
>>>>>>> 5eea30864a5f6b7d0248714e2dc5e256b554c2c0
                    ->setParameter('valeur', '%'.$valeur.'%')
                    ->getQuery()
                    ->getResult();                   
        }       
    }    
    
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
    /**
     * Retourne les n formations les plus récentes
     * @param type $nb
     * @return Formation[]
     */
    public function findAllLasted($nb) : array {
        return $this->createQueryBuilder('f')
<<<<<<< HEAD
                ->orderBy(FPUBLISHEDAT, 'DESC')
=======
<<<<<<< HEAD
                ->orderBy(FPUBLISHEDAT, 'DESC')
=======
<<<<<<< HEAD
                ->orderBy(FPUBLISHEDAT, 'DESC')
=======
                ->orderBy('f.publishedAt', 'DESC')
>>>>>>> 5eea30864a5f6b7d0248714e2dc5e256b554c2c0
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
                ->setMaxResults($nb)     
                ->getQuery()
                ->getResult();
    }    
    
    /**
     * Retourne la liste des formations d'une playlist
     * @param type $idPlaylist
     * @return array
     */
    public function findAllForOnePlaylist($idPlaylist): array{
        return $this->createQueryBuilder('f')
                ->join('f.playlist', 'p')
                ->where('p.id=:id')
                ->setParameter('id', $idPlaylist)
<<<<<<< HEAD
                ->orderBy(FPUBLISHEDAT, 'ASC')   
=======
<<<<<<< HEAD
                ->orderBy(FPUBLISHEDAT, 'ASC')   
=======
<<<<<<< HEAD
                ->orderBy(FPUBLISHEDAT, 'ASC')   
=======
                ->orderBy('f.publishedAt', 'ASC')   
>>>>>>> 5eea30864a5f6b7d0248714e2dc5e256b554c2c0
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
                ->getQuery()
                ->getResult();        
    }
    
}
