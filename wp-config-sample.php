<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'vorlogio');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@axcF#Y_*-t!|P)joH}*^%fOO|]:qLA^5z+QO}uh)IenO3feFzI)e~Lz{}Dmp!p?');
define('SECURE_AUTH_KEY',  'E@T&.K57EY0D{n{3EiEPI[PNdtcSuJ>&be1Tgx4qZT)zB1t6ahh<l=6t>;E*b,+|');
define('LOGGED_IN_KEY',    '_|pzqBfKG-YoG]zg:{y#f0c@M=fq1B[PBC`env:Ut>r $at+[P#$>aI`C<z2Fg]$');
define('NONCE_KEY',        '%nHwK b+?=7(v8hunYp9<n%k3Q1Hflu-;2&fttLc[BQ]d;:oF.iCM-|OnHMdwoPO');
define('AUTH_SALT',        '2-g^uj,&3ZT3B)F]P6H=KBzY% YGHZnv>7NapJ};cb$5e03BX7]0}m&o@AGag}gV');
define('SECURE_AUTH_SALT', 'rWK)|~oNR%JupZnr8MNXSG,Li5GtdWi58|HIawreP=l/{ZhTX34%mN~tIp^!^h36');
define('LOGGED_IN_SALT',   '$rQ6BVjxtG+v14cD6*jgY%w6nST6Y>}_/.$*rk@dXOEqV#>Cc*oAM<p~LFj~kPdY');
define('NONCE_SALT',       'o@;slq5S5&B6j%SkD!xG*}W]mTJY7sjGH$Yu}AUiJGu-;#~fR$S9?Jg<,CWkPQT-');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
