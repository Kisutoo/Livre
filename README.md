# 📚 Projet PHP POO – Gestion de Livres et Auteurs

Ce projet illustre l'application de la **programmation orientée objet (POO)** en PHP à travers un système de gestion de livres et de leurs auteurs.

---

## 🎯 Objectif

Modéliser un système permettant :
- De créer des livres associés à un auteur
- D'enregistrer tous les livres d’un auteur via une relation objet
- D’organiser les données et méthodes dans des classes respectant les bonnes pratiques de la POO

---


---

## 🧠 Concepts POO utilisés

| Concept               | Présentation |
|-----------------------|--------------|
| **Encapsulation**     | Propriétés en `private` accessibles via getters/setters |
| **Constructeur**      | Initialisation des objets avec `__construct()` |
| **Méthode magique**   | `__toString()` pour personnaliser l'affichage |
| **Composition**       | Un `Livre` est lié à un `Auteur`, un `Auteur` détient un tableau de livres |
| **Array d’objets**    | L’auteur garde la trace de tous les livres qui lui sont associés |
| **DateTime**          | Gestion des dates de publication via `DateTime` PHP |

---

## 🧩 Description des classes

### 📘 `Livre.php`

- Attributs :
  - `_titre` (string)
  - `_parution` (DateTime)
  - `_nbPages` (int)
  - `_prix` (float)
  - `_auteur` (objet `Auteur`)
- À l’instanciation, le livre **s’ajoute automatiquement** à la bibliographie de l’auteur via `addLivre()`

### ✍️ `Auteur.php`

- Attributs :
  - `_nom`, `_prenom` (string)
  - `_livres` (array d’objets `Livre`)
- Méthode `addLivre(Livre $livre)` : ajoute un livre à la bibliographie de l’auteur

---

## 🔍 Exemple d'utilisation

### `index.php`

```php
require "Livre.php";
require "Auteur.php";

$auteur1 = new Auteur("Hugo", "Victor");
$livre1 = new Livre("Les Misérables", "1862-01-01", 1488, 19.90, $auteur1);
$livre2 = new Livre("Notre-Dame de Paris", "1831-03-16", 940, 15.50, $auteur1);

// Affiche les infos de l'auteur
var_dump($auteur1);

