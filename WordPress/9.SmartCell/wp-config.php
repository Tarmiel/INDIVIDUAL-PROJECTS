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
define( 'DB_NAME', 'wp_SmartCell' );

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
define( 'AUTH_KEY',         '$M u%3MW[.FrC;iTI>~drZv,b<cGX`# )bN0b&y,T:Q]8S,5=^.yn2:0Oef_OV$ ' );
define( 'SECURE_AUTH_KEY',  'r-T))^|vg1&.z2}{D:ui7[[i` fTP/(Ff?hWb>$|XaY!g&;T^0AU=^Bbt/q?wG~(' );
define( 'LOGGED_IN_KEY',    '<L/:m_:d:J8OLu5uo%]SQNjQxE29Zmaz.JFLFNtiVW3aOF,2%f-_~S-tXaq=RvAQ' );
define( 'NONCE_KEY',        '&pc2T  SN@H0>ON%sAGRzTDR&kwuYiQzS|x/gh}b oB8o:x-3OK9}q9Z9hK#xy?d' );
define( 'AUTH_SALT',        'SSI0QIxv~@mgRS_Gt9cD5r/1~k9NW0Gt0yBw]hhr7OXrw=cglbY!Q+8curXobKIH' );
define( 'SECURE_AUTH_SALT', '?[6btmZ/~Vvg(n*_0G<!rKzI0)y.Ye<IWxVbbMr:DZh82~/=}BC7AU%=~E4q<m76' );
define( 'LOGGED_IN_SALT',   'CgCu#ijOAxaO5?CvaBC6ztAv;6UytSi$SCybb1 lm`QaRf<CyOYgj Hu%|*Bu2S4' );
define( 'NONCE_SALT',       ']~.^E*i`c/`4-k9*~*q&A/ }rci0D{c9e/:xS]FI0xp?@QR5#7T.gtUJzr]^qKeq' );

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
define( 'FS_METHOD','direct');
/* Isto �� tudo, pode parar de editar! :) */

/** Caminho absoluto para o diret��rio WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as vari��veis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
