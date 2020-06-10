<?php
/**
 * As configura�0�4�0�1es b��sicas do WordPress
 *
 * O script de cria�0�4�0�0o wp-config.php usa esse arquivo durante a instala�0�4�0�0o.
 * Voc�� n�0�0o precisa usar o site, voc�� pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo cont��m as seguintes configura�0�4�0�1es:
 *
 * * Configura�0�4�0�1es do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configura�0�4�0�1es do MySQL - Voc�� pode pegar estas informa�0�4�0�1es com o servi�0�4o de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp_vemSerPraia' );

/** Usu��rio do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na cria�0�4�0�0o das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. N�0�0o altere isso se tiver d��vidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves ��nicas de autentica�0�4�0�0o e salts.
 *
 * Altere cada chave para um frase ��nica!
 * Voc�� pode ger��-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Voc�� pode alter��-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto ir�� for�0�4ar todos os
 * usu��rios a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'w_;C|yZn&Xr3.eV+%-5wwg*oKAL4f_gTc.$iG4;JRb*+SoJc(aA#7sEdo|RdC>)c' );
define( 'SECURE_AUTH_KEY',  'eT1*adR|?y!@83?vi60$6WF@y^dl$1&O#-7R.D[^E1jgEHUfN5Jt+Nix96,r`!dg' );
define( 'LOGGED_IN_KEY',    'c|swni,EA93JRJ@qz:9L1[QPJ[=0_h(8}LTM{!bmoI(af,gv0O9-*ILis:50,yGp' );
define( 'NONCE_KEY',        '*c.swMsZ!V+,ch:fQ,uu[7A| x;}1{&u%59s6a|46.9J>?_ &<2Y$apd[=gZ[imB' );
define( 'AUTH_SALT',        'N]%u(e/C5qsN:e/3v;Jg_.Ejc-xvMs$bnL*{ (~nN?<X#S*}r#o1R}*[;|ORH$Xg' );
define( 'SECURE_AUTH_SALT', 'F:K67d)IaFcMX`C2,_B)4L@ P]?v=7Rr1*;-/k[r5[X`<X*kS+,Ax!f5vCZ*|GX`' );
define( 'LOGGED_IN_SALT',   'BV#,y(aYD9h9EKxA=n&JjK|e);0QV,hyPQtt7WpHB+(=7OPGy%k^Mb3`;{C0H V:' );
define( 'NONCE_SALT',       '#V6oA =CuXM4{/bq,nD/p#W(pp6KNE,vfe6$!UxFk5Srrr~CB`(5@p.W,)_!6JWM' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Voc�� pode ter v��rias instala�0�4�0�1es em um ��nico banco de dados se voc�� der
 * um prefixo ��nico para cada um. Somente n��meros, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibi�0�4�0�0o de avisos
 * durante o desenvolvimento. �0�7 altamente recomend��vel que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informa�0�4�0�1es sobre outras constantes que podem ser utilizadas
 * para depura�0�4�0�0o, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'FS_METHOD', 'direct');

/* Isto �� tudo, pode parar de editar! :) */

/** Caminho absoluto para o diret��rio WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as vari��veis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
