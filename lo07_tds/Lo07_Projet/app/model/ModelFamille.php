
<!-- ----- debut ModelVin -->

<?php
require_once 'Model.php';

class ModelFamille {
 private $id, $nom;

 // pas possible d'avoir 2 constructeurs
 public function __construct($id = NULL, $nom = NULL) {
  // valeurs nulles si pas de passage de parametres
  if (!is_null($id)) {
   $this->id = $id;
   $this->nom = $nom;

  }
 }

 function setId($id) {
  $this->id = $id;
 }

 function setNom($nom) {
  $this->nom = $nom;
 }


 function getId() {
  return $this->id;
 }

 function getNom() {
  return $this->nom;
 }

// retourne une liste des id
 public static function getAllId() {
  try {
   $database = Model::getInstance();
   $query = "select id from famille";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 public static function getAll() {
  try {
   $database = Model::getInstance();
   $query = "select * from famille";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelFamille");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }



 public static function update() {
  echo ("ModelVin : update() TODO ....");
  return null;
 }

 public static function delete() {
  echo ("ModelVin : delete() TODO ....");
  return null;
 }

}
?>
<!-- ----- fin ModelVin -->
