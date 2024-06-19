<?php

/**
 * Pour PHP Storm
 * @var object $utilisateur
 */

include('header-init.php');
include('extraction-jwt.php');

$json = file_get_contents('php://input');

$ticket = json_decode($json);

$requete = $connexion->prepare("INSERT INTO ticket 
                                (  title_ticket , ticket_content) VALUES 
                                (:title_ticket, :ticket_content)");

$requete->bindValue("title_ticket", $ticket->title);
$requete->bindValue("ticket_content", $ticket->content);


$requete->execute();

echo '{"message" : "inscription réussie"}';
