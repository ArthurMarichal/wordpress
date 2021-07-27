<?php

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
    define('FORCE_SSL_ADMIN', true);
}
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'password' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'db' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '47?l5+tkhpGc{NUin%`Dnvd9v|d=>)SOyldanvO0!*sKRU2a:(T~WZ#_O)b^pbUT' );
define( 'SECURE_AUTH_KEY',  'H#Ol^2v/uZiHq#s+Cp)+x=!aL/;~w93?Ud%)[QSFbHn!IeWK77Q`dC#KWl76`/og' );
define( 'LOGGED_IN_KEY',    'PhN1Vo?L3@=;{Sq-/fd$weF@uHnQ:ffpA9[nLK1*vQ[gwE,`|&e(}o]t| k|M1&u' );
define( 'NONCE_KEY',        'qpV y.mU(f-(4?lKUATG]#]u[w{sWka0TUaH<#6$q98C}{9;.&^bd`v_=Q/{=1eT' );
define( 'AUTH_SALT',        '4LZv!i38#M87:IDqJ#x1I8!fy!)Cg^#G8=(:0[MtOvDNzT*5dohZXAwl_o9RpnUZ' );
define( 'SECURE_AUTH_SALT', 'DHp3sk|m1:k_36+(ZUT)(r);LbJDS}{J%%MU(IS1xG>;a`r7Tms.^BZu+3CNQsB!' );
define( 'LOGGED_IN_SALT',   '5%Z01%w=B[ c*jBw<!}_qDtS>l{zVBU!B2Y*qW{kQw[<JgI),28KhkugdO!=IO]$' );
define( 'NONCE_SALT',       'qlj_M]P:o=XEBZZ?r<63!3m2fE`?ac* +g};vxMY6c~p1trf~#!P[V*V@ZG#;aCZ' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
