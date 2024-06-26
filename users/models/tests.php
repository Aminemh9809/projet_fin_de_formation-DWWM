<?php
require_once '../config/config.php';

class Tests
{

    public static function questions(string $test_id){

        try {
            // Les informations de connexion à la base de données

            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Requête SQL d'insertion des données dans la table userprofil
            $sql = "SELECT *
            FROM questions
            WHERE id_tests = :test_id;";

            // Préparation de la requête
            $query = $db->prepare($sql);

            // Liaison des valeurs avec les paramètres de la requête
            $query->bindValue(':test_id', $test_id,PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
            
            // Exécution de la requête
        } catch (PDOException $e) {
            // En cas d'erreur, affichage du message d'erreur et arrêt du script
            echo "Erreur : " . $e->getMessage();
            die();
        }
    }
    // public static function answers(string $question_id){

    //     try {
    //         // Les informations de connexion à la base de données

    //         // Création de l'objet PDO pour la connexion à la base de données
    //         $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
    //         // Paramétrage des erreurs PDO pour les afficher en cas de problème
    //         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //         // Requête SQL d'insertion des données dans la table userprofil
    //         $sql = "SELECT * from answers
    //         natural join questions
    //          where id_questions = :question_id";

    //         // Préparation de la requête
    //         $query = $db->prepare($sql);

    //         // Liaison des valeurs avec les paramètres de la requête
    //         $query->bindValue(':question_id', $question_id,PDO::PARAM_STR);
    //         $query->execute();
    //         $result = $query->fetchAll(PDO::FETCH_ASSOC);
    //         return $result;
            
    //         // Exécution de la requête
    //     } catch (PDOException $e) {
    //         // En cas d'erreur, affichage du message d'erreur et arrêt du script
    //         echo "Erreur : " . $e->getMessage();
    //         die();
    //     }
    // }
    public static function answersNew(string $test_id, string $question_id){

        try {
            // Les informations de connexion à la base de données

            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Requête SQL d'insertion des données dans la table userprofil
            $sql = "SELECT * from answers
             natural join tests_have_answers
             natural join questions where id_tests = :test_id  and id_questions = :question_id";

            // Préparation de la requête
            $query = $db->prepare($sql);

            // Liaison des valeurs avec les paramètres de la requête
            $query->bindValue(':test_id', $test_id,PDO::PARAM_STR);
            $query->bindValue(':question_id', $question_id,PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
            
            // Exécution de la requête
        } catch (PDOException $e) {
            // En cas d'erreur, affichage du message d'erreur et arrêt du script
            echo "Erreur : " . $e->getMessage();
            die();
        }
    }


    
    public static function tests(){

        try {
            // Les informations de connexion à la base de données

            // Création de l'objet PDO pour la connexion à la base de données
            $db = new PDO("mysql:host=localhost;dbname=" . DB_NAME, DB_USER, DB_PASS);
            // Paramétrage des erreurs PDO pour les afficher en cas de problème
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            // Requête SQL d'insertion des données dans la table userprofil
            $sql = "SELECT * from tests";

            // Préparation de la requête
            $query = $db->prepare($sql);

            // Liaison des valeurs avec les paramètres de la requête
            // $query->bindValue(':id_tests', $tests_id,PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
            
            // Exécution de la requête
        } catch (PDOException $e) {
            // En cas d'erreur, affichage du message d'erreur et arrêt du script
            echo "Erreur : " . $e->getMessage();
            die();
        }
    }
}