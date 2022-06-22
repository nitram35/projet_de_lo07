<!--   debut ModelIndividu -->

<?php
require_once 'Model.php';

class ModelIndividu
{
    private $famille_id,
        $id,
        $nom,
        $prenom,
        $sexe,
        $pere,
        $mere;

    public function __construct($famille_id = NULL, $id = NULL, $nom = NULL, $prenom = NULL, $sexe = NULL, $pere = NULL, $mere = NULL)
    {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($famille_id)) {
            $this->famille_id = $famille_id;
            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->sexe = $sexe;
            $this->pere = $pere;
            $this->mere = $mere;
        }
    }

    public function getFamille_id()
    {
        return $this->famille_id;
    }

    public function setFamille_id($famille_id)
    {
        $this->famille_id = $famille_id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    public function getPere()
    {
        return $this->pere;
    }

    public function setPere($pere)
    {
        $this->pere = $pere;
    }

    public function getMere()
    {
        return $this->mere;
    }

    public function setMere($mere)
    {
        $this->mere = $mere;
    }

    public static function getAll()
    {
        try {
            $database = Model::getInstance();
            $query = "SELECT * FROM individu WHERE famille_id=:famille_id and id!=0";
            $statement = $database->prepare($query);
            $statement->execute(['famille_id' => $_SESSION['famille_id']]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelIndividu");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function insert($nom, $prenom, $sexe)
    {
        try {
            $database = Model::getInstance();

            // recherche de la valeur de la clé = max(id) + 1
            $query = "select max(id) from individu where famille_id=:famille_id";
            $statement = $database->prepare($query);
            $statement->execute(['famille_id' => $_SESSION['famille_id']]);
            $tuple = $statement->fetch();
            $id = $tuple['0'];
            $id++;

            // ajout d'un nouvel indiv
            $query = "insert into individu value (:famille_id, :id, :nom, :prenom, :sexe, 0, 0)";
            $statement = $database->prepare($query);
            $statement->execute([
                'famille_id' => $_SESSION['famille_id'],
                'id' => $id,
                'nom' => $nom,
                'prenom' => $prenom,
                'sexe' => $sexe
            ]);
            return $id;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return -1;
        }
    }

    ///Page Individu (partie complexe)
    public static function getInformations($id)
    {
        try {
            // On crée un array
            $informations = [];
            $database = Model::getInstance();

            //On récupère toutes les infos de l'individu
            $query = "select * from individu where id=:id and famille_id=:famille_id";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $id,
                'famille_id' => $_SESSION['famille_id']
            ]);
            $results = $statement->fetchAll();
            $informations['individu'] = $results[0];


            //On ajoute les noms et prenoms des parents
            //Pour la mère
            $query = "select nom,prenom from individu where id=:id and famille_id=:famille_id";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $informations['individu']['mere'],
                'famille_id' => $_SESSION['famille_id']
            ]);
            $results = $statement->fetchAll();
            if (empty($results[0]['nom']))
                $informations['individu']['mere_nom'] = 'nom inconnu';
            else
                $informations['individu']['mere_nom'] = $results[0]['nom'];

            if (empty($results[0]['prenom']))
                $informations['individu']['mere_prenom'] = 'prénom inconnu';
            else
                $informations['individu']['mere_prenom'] = $results[0]['prenom'];

            //Pour le père
            $query = "select nom,prenom from individu where id=:id and famille_id=:famille_id";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $informations['individu']['pere'],
                'famille_id' => $_SESSION['famille_id']
            ]);
            $results = $statement->fetchAll();
            if (empty($results[0]['prenom']))
                $informations['individu']['pere_nom'] = 'nom inconnu';
            else
                $informations['individu']['pere_nom'] = $results[0]['nom'];

            if (empty($results[0]['prenom']))
                $informations['individu']['pere_prenom'] = 'prénom inconnu';
            else
            $informations['individu']['pere_prenom'] = $results[0]['prenom'];


            //On récupère les evenements


            //Pour un déces
            $query = "select event_lieu,event_date from evenement where event_type='DECES' and iid=:id and famille_id=:famille_id";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $id,
                'famille_id' => $_SESSION['famille_id']
            ]);
            $results = $statement->fetchAll();
            if (empty($results[0]['event_lieu']))
                $informations['evenement']['DECES']['event_lieu'] = 'lieu inconnu';
            else
                $informations['evenement']['DECES']['event_lieu'] = $results[0]['event_lieu'];
            if (empty($results[0]['event_date']))
                $informations['evenement']['DECES']['event_date'] = 'date inconnue';
            else
                $informations['evenement']['DECES']['event_date'] = $results[0]['event_date'];


            //Pour une naissance
            $query = "select event_lieu,event_date from evenement where event_type='NAISSANCE' and iid=:id and famille_id=:famille_id";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $id,
                'famille_id' => $_SESSION['famille_id']
            ]);
            $results = $statement->fetchAll();
            if (empty($results[0]['event_lieu']))
                $informations['evenement']['NAISSANCE']['event_lieu'] = 'lieu inconnu';
            else
                $informations['evenement']['NAISSANCE']['event_lieu'] = $results[0]['event_lieu'];

            if (empty($results[0]['event_date']))
                $informations['evenement']['NAISSANCE']['event_date'] = 'date inconnue';
            else
                $informations['evenement']['NAISSANCE']['event_date'] = $results[0]['event_date'];


            //Récup union et parenté
            $query = "SELECT iid1,iid2 from lien where (iid1=:id or iid2=:id) and famille_id=:famille_id";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $id,
                'famille_id' => $_SESSION['famille_id']
            ]);
            $results = $statement->fetchAll();
            $informations['union'] = [];

            //Récupération des enfants
            $i = 0;
            foreach ($results as $element) {
                $informations['union'][$i] = [];
                if ($element['iid1'] == $id)
                    $informations['union'][$i]['id'] = $element['iid2'];
                else
                    $informations['union'][$i]['id'] = $element['iid1'];
                //Recherche du nom et prénom la personne de l'union
                $query = "select nom,prenom from individu where id=:id and famille_id=:famille_id";
                $statement = $database->prepare($query);
                $statement->execute([
                    'id' => $informations['union'][$i]['id'],
                    'famille_id' => $_SESSION['famille_id']
                ]);
                $results = $statement->fetchAll();
                $informations['union'][$i]['nom'] = $results[0]['nom'];
                $informations['union'][$i]['prenom'] = $results[0]['prenom'];

                //Recherche enfants
                $query = "select id,nom,prenom from individu where pere=:id and mere=:id2 and famille_id=:famille_id";
                $statement = $database->prepare($query);
                if ($informations['individu']['sexe'] == 'H') {
                    $statement->execute([
                        'id2' => $informations['union'][$i]['id'],
                        'id' => $id,
                        'famille_id' => $_SESSION['famille_id']
                    ]);
                } else {
                    $statement->execute([
                        'id2' => $id,
                        'id' => $informations['union'][$i]['id'],
                        'famille_id' => $_SESSION['famille_id']
                    ]);
                }
                $results = $statement->fetchAll();
                $informations['union'][$i]['enfants'] = $results;
                $i++;
            }


            return $informations;
        } catch (PDOException $e) {
            return -1;
        }
    }

    public static function update()
    {
        echo("ModelIndividu : update() TODO ....");
        return null;
    }

    public static function delete()
    {
        echo("ModelIndividu : delete() TODO ....");
        return null;
    }

} ?>
<!--   fin ModelIndiv -->
