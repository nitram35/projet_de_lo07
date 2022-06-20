<?php
require_once 'Model.php';

class ModelEvenement
{
    private $famille_id,
        $id,
        $iid,
        $event_type,
        $event_date,
        $event_lieu;

    public function __construct($famille_id = NULL, $id = NULL, $iid = NULL, $event_type = NULL, $event_date = NULL, $event_lieu = NULL)
    {
        if (!is_null($id) and !is_null($famille_id)) {
            $this->famille_id = $famille_id;
            $this->id = $id;
            $this->iid = $iid;
            $this->event_type = $event_type;
            $this->event_date = $event_date;
            $this->event_lieu = $event_lieu;
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


    public function getIid()
    {
        return $this->iid;
    }

    public function setIid($iid)
    {
        $this->iid = $iid;
    }

    public function getEventType()
    {
        return $this->event_type;
    }

    public function setEventType($event_type)
    {
        $this->event_type = $event_type;
    }

    public function getEventDate()
    {
        return $this->event_date;
    }

    public function setEventDate($event_date)
    {
        $this->event_date = $event_date;
    }

    public function getEvent_lieu()
    {
        return $this->event_lieu;
    }

    public function setEvent_lieu($event_lieu)
    {
        $this->event_lieu = $event_lieu;
    }

    //Renvoie les evenements propres à la famille selected
    public static function getAll()
    {
        try {
            $database = Model::getInstance();
            $query = "select * from evenement where famille_id=:famille_id";
            $statement = $database->prepare($query);
            $statement->execute([
                'famille_id' => $_SESSION['famille_id']
            ]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelEvenement");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function insert($iid, $event_type, $event_date, $event_lieu)
    {
        try {
            $database = Model::getInstance();

            // recherche de la valeur de la clé = max(id) + 1
            $query = "select max(id) from evenement";
            $statement = $database->query($query);
            $tuple = $statement->fetch();
            $id = $tuple['0'];
            $id++;

            // ajout d'un nouveau tuple évènement;
            $query = "insert into evenement value (:famille_id, :id, :iid, :event_type, :event_date, :event_lieu)";
            $statement = $database->prepare($query);
            $statement->execute([
                'famille_id' => $_SESSION['famille_id'],
                'id' => $id,
                'iid' => $iid,
                'event_type' => $event_type,
                'event_date' => $event_date,
                'event_lieu' => $event_lieu
            ]);
            return $id;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return -1;
        }
    }

    public static function update()
    {
        echo("ModelEvenement : update() TODO ....");
        return null;
    }

    public static function delete()
    {
        echo("ModelEvenement : delete() TODO ....");
        return null;
    }

}

?>
<!--   fin ModelEvenement -->
