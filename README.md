Cette API est supposée permettre une gestion de ses taches à partir des routes suivantes:

1. POST /api/tasks:
avec l'attribut title, description, et status. La valeur par défaut de Status est "pending"

Exemple
{
  "title": "Nouvelle tâche",
  "description": "C'est une nouvelle tâche.",
  "status": "pending"
}

Avec la réponse suivante:
{
  "id": 3,
  "title": "Nouvelle tâche",
  "description": "C'est une nouvelle tâche.",
  "createdAt": "2024-12-04T13:00:00+00:00",
  "updatedAt": "2024-12-04T13:00:00+00:00",
  "status": "pending"
}

2. 
Récupérer une tâche spécifique

    GET /api/tasks/{id}
    Description : Récupérer une tâche spécifique par son identifiant (id).

Exemple de réponse :

{
  "id": 1,
  "title": "Task 1",
  "description": "Description de la tâche 1",
  "createdAt": "2024-12-04T12:00:00+00:00",
  "updatedAt": "2024-12-04T12:30:00+00:00",
  "status": "pending"
}

3. Mettre à jour une tâche

    PUT /api/tasks/{id}
    Description : Mettre à jour une tâche existante en spécifiant son id et en envoyant les nouvelles valeurs pour le titre, la description et le statut.

Exemple de requête :

{
  "title": "Tâche mise à jour",
  "description": "Nouvelle description pour la tâche.",
  "status": "in-progress"
}

Exemple de réponse :

{
  "id": 1,
  "title": "Tâche mise à jour",
  "description": "Nouvelle description pour la tâche.",
  "createdAt": "2024-12-04T12:00:00+00:00",
  "updatedAt": "2024-12-04T14:00:00+00:00",
  "status": "in-progress"
}

4. Supprimer une tâche

    DELETE /api/tasks/{id}
    Description : Supprimer une tâche par son identifiant (id).

Exemple de réponse :

{
  "status": "success",
  "message": "Task with ID 1 deleted successfully"
}

Validation des données

Les données envoyées dans les requêtes sont validées automatiquement grâce à Symfony Validator :

    Le title est obligatoire et ne peut être vide.
    Le status est une chaîne de caractères représentant l'état de la tâche et peut être "pending", "in-progress" ou "completed".