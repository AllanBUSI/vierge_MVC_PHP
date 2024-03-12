# Contrôleurs (Controllers)

Ce dossier contient les contrôleurs de l'application. Les contrôleurs agissent comme des intermédiaires entre les modèles et les vues, gérant les entrées de l'utilisateur, invoquant les opérations sur les modèles appropriés et sélectionnant les vues à afficher.

## Rôle

Les contrôleurs ont plusieurs responsabilités principales :

- Interpréter les requêtes de l'utilisateur provenant de l'interface utilisateur (UI) ou d'autres sources.
- Traiter les données envoyées par l'utilisateur, les valider et les préparer pour le traitement par les modèles.
- Sélectionner la vue appropriée à afficher en fonction des données traitées et des actions de l'utilisateur.
- Gérer la logique métier qui ne relève pas directement du domaine des modèles.

## Organisation

Les contrôleurs sont généralement organisés en classes individuelles, chacune correspondant à un ensemble spécifique d'actions ou de fonctionnalités de l'application. Ils peuvent être regroupés par domaine, fonctionnalité ou ressource, en fonction de la structure de l'application.

## Exemple

Voici un exemple de contrôleur représentant les actions liées à la gestion des utilisateurs dans une application de gestion des utilisateurs :

```php
<?php
class UserController {
    public function show($id) {
        // Instancier le modèle utilisateur
        $userModel = new UserModel();
        
        // Récupérer les données de l'utilisateur
        $user = $userModel->getUser($id);
        
        // Charger la vue pour afficher les détails de l'utilisateur
        include 'user_view.php';
    }

    public function update($id, $data) {
        // Instancier le modèle utilisateur
        $userModel = new UserModel();
        
        // Mettre à jour les données de l'utilisateur
        $userModel->updateUser($id, $data);
        
        // Rediriger l'utilisateur vers la page de détails de l'utilisateur
        header("Location: /user/$id");
        exit;
    }
}
?>
