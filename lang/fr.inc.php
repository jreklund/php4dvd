<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');

/**
 * This is the language file. If you want the website to be in your own language, translate the following lines and
 * change the configuration settings where you add the new language and update the default language:
 *
 * config.php:
 * $settings["languages"] = array("English" => "en"); -> $settings["languages"] = array("English" => "en", "Nederlands" => "nl");
 * $settings["defaultlanguage"] = "en" -> $settings["defaultlanguage"] = "nl";
 *
 * When you want your translation to be included in the next php4dvd release, please send me a message on https://github.com/jreklund/php4dvd
 */

/**
 * Title
 */
define("_TITLE",									"My collection");

/**
 * Menu
 */
define("MY_COLLECTION",								"Ma collection");
define("HOME",										"Accueil");
define("BACK",										"Retour");
define("SETTINGS",									"Paramètres");
define("MY_PROFILE",								"Mon profil");
define("USER_MANAGEMENT",							"Gestion utilisateur");
define("LOG_IN", 									"Connexion");
define("LOG_OUT",									"Déconnexion");
define("ARE_YOU_SURE_YOU_WANT_TO_LOG_OUT",			"Êtes-vous sûr(e) de vous déconnecter?");

/**
 * Log in page
 */
define("USER_NAME",									"Nom d'utilisateur");
define("PASSWORD",									"Mot de passe");
define("INCORRECT_USERNAME_OR_PASSWORD",			"Nom d'utilisateur ou mot de passe incorrect");
define("REMEMBER_ME",								"Se souvenir de moi");

/**
 * Home
 */
// Menu
define("ADD",										"Ajout");
define("UPDATE_ALL_MOVIE_INFORMATION",				"Tout mettre à jour");
define("EXPORT_TO_CSV",								"Export");
// Search
define("SEARCH_DEFAULT_TEXT",						"Recherche...");
define("CATEGORIES",								"Catégories");
define("ALL_CATEGORIES",							"Toutes les catégories");
define("FORMATS",									"Formats");
define("ALL_FORMATS",								"Tous les formats");
define("SORT_BY",									"Trier par");
define("LAYOUT",									"Mise en page");
define("nameorder asc",								"Nom (A-Z)");
define("nameorder desc",							"Nom (Z-A)");
define("year asc",									"Année (0-9)");
define("year desc",									"Année (9-0)");
define("rating asc",								"Note (0-9)");
define("rating desc",								"Note (9-0)");
define("votes asc",								    "Votes (0-9)");
define("votes desc",								"Votes (9-0)");
define("format asc",								"Format (A-Z)");
define("format desc",								"Format (Z-A)");
define("seen asc",									"Vu (croissant)");
define("seen desc",									"Vu (décroissant)");
define("own asc",									"Possédé (croissant)");
define("own desc",									"Possédé (inverse)");
define("added asc",									"Ajouté (croissant)");
define("added desc",								"Ajouté (décroissant)");
define("loaned asc",								"Loué (croissant)");
define("loaned desc",								"Loué (décroissant)");
define("ALL", 										"Tout");
define("RESULTS_PER_PAGE",							"Résultats par page");
define("FILTER_BY",									"Filtrer par");
// Results
define("NO_RESULTS_FOUND",							"Aucun titre trouvé.");
define("NO_COVER",									"Pas de jaquette");
define("NUMBER_OF_TITLES",							"Nombre de titres");
define("STATISTICS",								"Statistiques");

/**
 * Movie
 */
// Menu
define("VISIT_IMDB",								"Visiter IMDb");
define("VIEW_TRAILER",								"Voir bande-annonce");
define("DOWNLOAD_COVER",							"Télécharger jaquette");
define("FAVOURITE",									"Favori");
define("NOT_FAVOURITE",								"Non favori");
define("OWN",										"Possédé");
define("NOT_OWN",									"Non possédé");
define("DO_YOU_OWN_THIS",							"Le possédez-vous?");
define("SEEN",										"Vu");
define("UNSEEN",									"Non vu");
define("HAVE_YOU_SEEN_THIS",						"Avez vous vu ceci?");
define("EDIT",										"Editer");
define("REMOVE",									"Supprimer");
// Movie information
define("LOANED_OUT",								"Loué");
define("TO",										"à");
define("ON",										"le");

/**
* Add/edit movie
*/
// Menu
define("SAVE",										"Sauvegarder");
define("SAVE_AND_ADD_ANOTHER",						"Sauvegarder et ajouter un nouveau");
define("UPDATE",									"Mettre à jour");
define("REMOVE_COVER",								"Enlever jaquette");
// IMDb search
define("ADD_FROM_IMDB",								"Ajouter à partir de IMDb");
define("SEARCH",									"Recherche");
define("RESULTS_FROM_IMDB",							"Résultats from IMDb");
// Movie information
define("MOVIE_INFORMATION",							"Informations");
define("IMDB_NUMBER",								"N° IMDb");
define("TITLE",										"Titre");
define("TITLE_ORDER",								"Titre (listé)");
define("AKA_TITLES",								"Autres noms");
define("YEAR",										"Année");
define("DURATION",									"Durée");
define("MINUTES",									"minutes");
define("DURATION_MINUTES",							"Durée (minutes)");
define("RATING",									"Note");
define("VOTES",									    "Votes");
define("FORMAT",									"Format");
define("DVD",										"DVD");
define("BLU_RAY",									"Blu-ray");
define("PARENTAL_GUIDANCE",							"Limite d'age");
define("PARENTAL_GUIDANCE_AGE",						"ans");
define("LOANED_OUT_TO",								"Loué à");
define("LOANED_OUT_SINCE",							"Loué depuis");
define("MOVIE",										"Film");
define("TV_SERIES",									"Série TV");
define("SEASONS",									"Saisons");
define("YES",										"Oui");
define("NO",										"Non");
define("COVER",										"Jaquette");
define("SEARCH_FOR_COVER",							"Recherche de jaquette");
define("PHOTO",										"Poster");
define("SEARCH_FOR_PHOTO",							"Recherche de poster");
define("PHOTO_FROM_IMDB",							"Poster (IMDb)");
define("DOWNLOAD_FROM_IMDB",						"Télécharger à partir de IMDb");
define("TRAILER_URL",								"URL de bande-annonce");
define("SEARCH_FOR_TRAILER",						"Recherche de bande-annonce");
define("PERSONAL_NOTES",							"Notes personnelles");
define("TAGLINES",									"Tags");
define("PLOT_OUTLINE",								"Grandes lignes");
define("PLOTS",										"Résumé");
define("LANGUAGES",									"Langages");
define("SUBTITLES",									"Sous-titres");
define("AUDIO",										"Audio");
define("VIDEO",										"Vidéo");
define("COUNTRY",									"Pays");
define("GENRES",									"Genres");
define("MPAA",										"MPAA");
define("DIRECTOR",									"Réalisateur");
define("WRITER",									"Scénariste");
define("PRODUCER",									"Producteur");
define("MUSIC",										"Musique");
define("CAST",										"Acteurs");
// Automatic update
define("AUTOUPDATE_INFO",							"Vos films sont automatiquement mis à jour à partir d'IMDb. Cela peut prendre un certain temps, alors soyez patient...");
define("STOP_UPDATE",								"Arrêter la mise à jour");

/**
* User management
*/
define("NEW_USER",									"Nouvel utilisateur");
define("EMAIL",										"E-mail");
define("AGAIN",										"Confirmer e-mail");
define("ROLE",										"Role");
define("GUEST",										"Invité (lecture seule)");
define("EDITOR",									"Editeur");
define("ADMIN",										"Admin");
define("USERS",										"Utilisateurs");
define("LAST_LOGGED_IN",							"Dernière connexion");
define("DUPLICATE_USER_NAME_OR_EMAIL",				"Un utilisateur avec le même nom d'utilisateur ou la même adresse e-mail existe déjà!");

/**
 * Messages
 */
define("REMOVE_INSTALL_DIR",						"Veuillez supprimer le répertoire install/ pour des raisons de sécurité!");
define("CONFIRM_REMOVE",							"Voulez-vous vraiment supprimer cela?");
define("CONFIRM_REMOVE_COVER",						"Voulez-vous vraiment retirer cette jaquette?");
// Validation
define("VALIDATOR_REQUIRED",						"Champ requis");
define("VALIDATOR_NUMBER",							"Veuillez entrer un nombre valide");
define("VALIDATOR_DIGITS",							"Veuillez entrer un nombre valide");
define("VALIDATOR_EMAIL",							"Veuillez entrer une adresse e-mail valide");
define("VALIDATOR_URL",								"Veuillez entrer une url valide (http://...)");
define("VALIDATOR_DATE",							"Veuillez entrer une date valide (aaaa-mm-jj)");
define("VALIDATOR_ACCEPT_JPG",						"Veuillez entrer un type de fichier valide (jpg)");
define("VALIDATOR_EQUAL_TO",						"Les deux entrées doivent être identiques");
define("VALIDATOR_USERNAME",						"Veuillez entrer un nom d'utilisateur valide. (A–Z, 0–9, .)\nentre 5-50 caractères.");

/**
 * Installer
 */
define("INSTALLATION",								"Installation");
define("WELCOME",									"Bienvenue");
define("WELCOME_TEXT",								"Bienvenue dans l'assistant d'installation. Suivez l'étape suivante pour installer php4dvd.");
define("NEXT",										"Suivant");
define("PREVIOUS",									"Précédent");
define("PERMISSIONS",								"Permissions");
define("PERMISSIONS_TEXT",							"Les répertoires et fichiers suivants doivent être créés et nécessitent des autorisations d'écriture:");
define("OK",										"OK");
define("FAILED",									"Echec");
define("FIX_PERMISSIONS",							"Chmod (777) ces répertoires ou fichiers avec votre client FTP préféré.");
define("REFRESH",									"Actualiser");
define("CONFIGURATION",								"Configuration");
define("CONFIGURATION_TEXT",						"Remplissez ce formulaire pour configurer php4dvd pour votre serveur.");
define("DATABASE",									"Base de données");
define("HOST",										"Hôte");
define("PORT",										"Port");
define("WEBSITE",									"Site web");
define("URL",										"Url");
define("TEMPLATE",									"Template");
define("LANGUAGE",									"Langage");
define("GUEST_USERS_CAN_SEE_COLLECTION",			"Les utilisateurs invités peuvent voir ma collection");
define("FAILED_TO_WRITE_FILE",						"Echec d'écriture du fichier");
define("DATABASE_NEW_TEXT",							"Une nouvelle version de la base de données sera installée. Toutes les anciennes tables existantes seront supprimées!");
define("DATABASE_UPGRADE_TEXT",						"Votre base de données sera mise à niveau vers la dernière version. Aucune information ne sera supprimée (il est sûr de faire une sauvegarde en premier!).");
define("ACCEPT",									"J'accepte");
define("FINISHED",									"Terminé");
define("FINISHED_TEXT",								"Votre installation est presque terminée. Cliquez sur le bouton Terminer ci-dessous.");
define("FINISH",									"Terminer");
?>
