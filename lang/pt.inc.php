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
define("_TITLE",									"A minha colecção");

/**
 * Menu
 */
define("MY_COLLECTION",								"A minha colecção");
define("HOME",										"Home");
define("BACK",										"Voltar");
define("SETTINGS",									"Configurações");
define("MY_PROFILE",								"Meu perfil");
define("USER_MANAGEMENT",							"Gestão de utilizadores");
define("LOG_IN", 									"Conecte-se");
define("LOG_OUT",									"Sair");
define("ARE_YOU_SURE_YOU_WANT_TO_LOG_OUT",			"Tem certeza que deseja sair?");

/**
 * Log in page
 */
define("USER_NAME",									"Nome do utilizador");
define("PASSWORD",									"Senha");
define("INCORRECT_USERNAME_OR_PASSWORD",			"Utilizador ou senha incorrectos");
define("REMEMBER_ME",								"Lembre-se de mim");

/**
 * Home
 */
// Menu
define("ADD",										"Adicionar");
define("UPDATE_ALL_MOVIE_INFORMATION",				"Atualizar tudo");
define("EXPORT_TO_CSV",								"Exportar");
// Search
define("SEARCH_DEFAULT_TEXT",						"Procurar...");
define("CATEGORIES",								"Categorias");
define("ALL_CATEGORIES",							"Todas as categorias");
define("FORMATS",									"Formatos");
define("ALL_FORMATS",								"Todos os formatos");
define("SORT_BY",									"Ordenar por");
define("LAYOUT",									"traçado");
define("nameorder asc",								"Nome (A-Z)");
define("nameorder desc",							"Nome (Z-A)");
define("year asc",									"Ano (0-9)");
define("year desc",									"Ano (9-0)");
define("rating asc",								"Avaliação (0-9)");
define("rating desc",								"Avaliação (9-0)");
define("votes asc",									"Votos (0-9)");
define("votes desc",								"Votos (9-0)");
define("format asc",								"Formato de (A-Z)");
define("format desc",								"Formato de (Z-A)");
define("seen asc",									"Visto");
define("seen desc",									"Visto inverso");
define("own asc",									"Possuo");
define("own desc",									"Possuo inverso");
define("added asc",									"Adicionado (antigo-recente)");
define("added desc",								"Adicionado (recente-antigo)");
define("loaned asc",								"Emprestado (antigo-recente)");
define("loaned desc",								"Emprestado (recente-antigo)");
define("ALL", 										"Todos");
define("RESULTS_PER_PAGE",							"Resultados por página");
define("FILTER_BY",									"Filtrar por");
// Results
define("NO_RESULTS_FOUND",							"Sem resultados.");
define("NO_COVER",									"Sem capa");
define("NUMBER_OF_TITLES",							"Número de títulos");
define("STATISTICS",								"Estatisticas");

/**
 * Movie
 */
// Menu
define("VISIT_IMDB",								"Visita o IMDb");
define("VIEW_TRAILER",								"Ver trailer");
define("DOWNLOAD_COVER",							"cobertura de download");
define("FAVOURITE",									"Favorito");
define("NOT_FAVOURITE",								"Não favorito");
define("OWN",										"Possuo");
define("NOT_OWN",									"Não possuo");
define("DO_YOU_OWN_THIS",							"Você tem este?");
define("SEEN",										"Visto");
define("UNSEEN",									"Por ver");
define("HAVE_YOU_SEEN_THIS",						"Você viu isso?");
define("EDIT",										"Editar");
define("REMOVE",									"Retirar");
// Movie information
define("LOANED_OUT",								"Emprestado");
define("TO",										"a");
define("ON",										"em");

/**
* Add/edit movie
*/
// Menu
define("SAVE",										"Gravar");
define("SAVE_AND_ADD_ANOTHER",						"Gravar e adicionar outro");
define("UPDATE",									"Actualizar");
define("REMOVE_COVER",								"Remover a capa");
// IMDb search
define("ADD_FROM_IMDB",								"Adicionar a partir do IMDb");
define("SEARCH",									"Procurar");
define("RESULTS_FROM_IMDB",							"Os resultados do IMDb");
// Movie information
define("MOVIE_INFORMATION",							"Informação");
define("IMDB_NUMBER",								"Número IMDb");
define("TITLE",										"Título");
define("TITLE_ORDER",								"Título (Ordenar por)");
define("AKA_TITLES",								"Também conhecido como");
define("YEAR",										"Ano");
define("DURATION",									"Duração");
define("MINUTES",									"Minutos");
define("DURATION_MINUTES",							"Duração (minutos)");
define("RATING",									"Avaliação");
define("VOTES",										"Votos");
define("FORMAT",									"Formato");
define("DVD",										"DVD");
define("BLU_RAY",									"Blu-ray");
define("PARENTAL_GUIDANCE",							"Classificação etária");
define("PARENTAL_GUIDANCE_AGE",						"Anos");
define("LOANED_OUT_TO",								"Emprestado a");
define("LOANED_OUT_SINCE",							"Emprestado desde");
define("MOVIE",										"Filme");
define("TV_SERIES",									"Séries de TV");
define("SEASONS",									"Temporadas");
define("YES",										"sim");
define("NO",										"Não");
define("COVER",										"Capa");
define("SEARCH_FOR_COVER",							"Procurar cobertura");
define("PHOTO",										"Poster");
define("SEARCH_FOR_PHOTO",							"Procurar cartaz");
define("PHOTO_FROM_IMDB",							"Poster (IMDb)");
define("DOWNLOAD_FROM_IMDB",						"Transferir a partir do IMDb");
define("TRAILER_URL",								"URL Trailer");
define("SEARCH_FOR_TRAILER",						"Procurar reboque");
define("PERSONAL_NOTES",							"Notas pessoais");
define("TAGLINES",									"Taglines");
define("PLOT_OUTLINE",								"Enredo");
define("PLOTS",										"Enredos");
define("LANGUAGES",									"Línguas");
define("SUBTITLES",									"Legendas");
define("AUDIO",										"Áudio");
define("VIDEO",										"Vídeo");
define("COUNTRY",									"País");
define("GENRES",									"Géneros");
define("MPAA",										"MPAA");
define("DIRECTOR",									"Realizador");
define("WRITER",									"Escritor");
define("PRODUCER",									"Produtor");
define("MUSIC",										"Música");
define("CAST",										"Elenco");
// Automatic update
define("AUTOUPDATE_INFO",							"Os seus filmes são actualizadas automaticamente a partir do IMDb. Isso pode demorar um pouco, por favor seja paciente ...");
define("STOP_UPDATE",								"Parar a actualização");

/**
* User management
*/
define("NEW_USER",									"Novo utilizador");
define("EMAIL",										"Email");
define("AGAIN",										"Novamente");
define("ROLE",										"Função");
define("GUEST",										"Visitante (ver apenas)");
define("EDITOR",									"Editor");
define("ADMIN",										"Administrador");
define("USERS",										"Comercial");
define("LAST_LOGGED_IN",							"Última vez logado");
define("DUPLICATE_USER_NAME_OR_EMAIL",				"Já existe um utilizador com o mesmo nome de utilizador ou e-mail!");

/**
 * Messages
 */
define("REMOVE_INSTALL_DIR",						"Por favor, remova a pasta de instalação / por razões de segurança!");
define("CONFIRM_REMOVE",							"Tem certeza de que deseja remover este?");
define("CONFIRM_REMOVE_COVER",						"Tem certeza de que deseja remover esta capa?");
// Validation
define("VALIDATOR_REQUIRED",						"Este campo é obrigatório");
define("VALIDATOR_NUMBER",							"Por favor insira um número válido");
define("VALIDATOR_DIGITS",							"Por favor insira um número válido");
define("VALIDATOR_EMAIL",							"Por favor insira um endereço de e-mail válido");
define("VALIDATOR_URL",								"Por favor insira um url válido (http: // ...)");
define("VALIDATOR_DATE",							"Por favor, indique uma data válida (aaaa-mm-dd)");
define("VALIDATOR_ACCEPT_JPG",						"Por favor, use um tipo de arquivo válido (jpg)");
define("VALIDATOR_EQUAL_TO",						"Ambos os valores devem ser os mesmos");
define("VALIDATOR_USERNAME",						"Por favor insira um nome de utilizador válido. (A-Z, 0-9,.) \nbetween 5-50 caracteres.");

/**
 * Installer
 */
define("INSTALLATION",								"Instalação");
define("WELCOME",									"Bem-vindo");
define("WELCOME_TEXT",								"Bem-vindo ao assistente de instalação. Siga o próximo passo para instalar php4dvd.");
define("NEXT",										"Próximo");
define("PREVIOUS",									"Anterior");
define("PERMISSIONS",								"permissões");
define("PERMISSIONS_TEXT",							"As seguintes pastas e ficheiros devem ser criados e requerem permissões de gravação:");
define("OK",										"Está bem");
define("FAILED",									"Falhou");
define("FIX_PERMISSIONS",							"O chmod (777) dessas pastas ou ficheiros com o seu cliente FTP favorito.");
define("REFRESH",									"Refrescar");
define("CONFIGURATION",								"Configuração");
define("CONFIGURATION_TEXT",						"Preencha este formulário para o php4dvd se configurar para o seu servidor.");
define("DATABASE",									"Base de dados");
define("HOST",										"Host");
define("PORT",										"Port");
define("WEBSITE",									"Site");
define("URL",										"Url");
define("TEMPLATE",									"Modelo");
define("LANGUAGE",									"Língua");
define("GUEST_USERS_CAN_SEE_COLLECTION",			"Os utilizadores convidados podem ver a minha colecção");
define("FAILED_TO_WRITE_FILE",						"Falha ao gravar o arquivo");
define("DATABASE_NEW_TEXT",							"Uma nova versão da base de dados será instalada. Quaisquer tabelas antigas existentes serão removidas!");
define("DATABASE_UPGRADE_TEXT",						"A base de dados será atualizada para a versão mais recente. Nenhuma informação será removida (é mais seguro fazer um backup primeiro!).");
define("ACCEPT",									"Eu aceito");
define("FINISHED",									"Acabado");
define("FINISHED_TEXT",								"Sua instalação está quase terminado. Clique no botão Concluir abaixo.");
define("FINISH",									"Terminar");

/**********/

/**
 * Categorias
 */
define("Action",									"Acção");
define("Adventure",									"Aventura");
define("Sport",										"Desporto");
define("War",										"Guerra");
define("Western",									"Western");
define("Thriller",									"Suspense");
define("Biography",									"Biográfico");
define("Animation",									"Animação");
define("Comedy",									"Comédia");
define("Family",									"Familiar");
define("Fantasy",									"Fantasia");
define("History",									"Histórico");

/**
 * Formatos
 */
define("DVD",										"DVD");
define("Blu-ray",									"Blu-ray");
