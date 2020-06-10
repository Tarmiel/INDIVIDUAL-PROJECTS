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
define( 'DB_NAME', 'wp_lolja' );

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
define( 'AUTH_KEY',         '/F)Vhvy~{p6!?<TZ)n(tt3MN[q+5B+{}dY/~DQcd(L&8zJE)bA1k-y7?`aO:3b0-' );
define( 'SECURE_AUTH_KEY',  'dnC)@Q%3]bIzn@On%0sa?<yuWUlgy|IH#1&|>4C0O3D>@Oal$3ElL<!ceV/(eav*' );
define( 'LOGGED_IN_KEY',    'PlNFsx~VAfUZhH^3Bo;R50z+:vzRiz(MfWretM&$|Nw*8py02x:KNy/Qvb&tp}HH' );
define( 'NONCE_KEY',        'ivCW3(3 ;lw@nqEPgDgByMvNK)w23bX-eo}[;ARo@>L[b+Fr34:RZKhK2:_AOUE8' );
define( 'AUTH_SALT',        '&]-Hj7X5}F}_8<K,(1n?&jc]cp^IJ4lLr|(E9#0D{O`f[|i64GTVoxeKH?JMfnhj' );
define( 'SECURE_AUTH_SALT', '<4?MQLZBG}q7@`XHAr,Fe+!T1R@L$2eIF}Q;Ro!p -PWC&xpw4.Xd>f_jOCI.#&@' );
define( 'LOGGED_IN_SALT',   'QT?S{~*nV=?$MBL[I$$XfK3oI?)N#>`3wz],d`0[ZlS)qM8dR~oN 8F((BvhQ)hZ' );
define( 'NONCE_SALT',       '+%R(QYXiR`)A};hd9:4i9jWj/N-0,$|tTeSPjWhP>:y6Susuy-.[G~Q#@@n/Z9n`' );

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
define( 'FS_METHOD', 'direct' );
/* Isto �� tudo, pode parar de editar! :) */
/** Caminho absoluto para o diret��rio WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as vari��veis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
