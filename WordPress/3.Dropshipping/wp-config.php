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
define( 'DB_NAME', 'wp_dropshipping' );

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
define( 'AUTH_KEY',         'jQr~0k 3/(&zI%X54$+RwW:q)Hl0-!NO-+0Alt64TC OFBdTzvU,9RPP,jc,^Y[l' );
define( 'SECURE_AUTH_KEY',  'VUyImp)rSd.s]-]3Cc`%5KWoh)O6(,0UlS6W{8uJRX%n^OI7Tmy]:PzQZx!4f={H' );
define( 'LOGGED_IN_KEY',    '<f$53g0E+u~j4!f%itk<j|WtL/c.Ke%q>&ql2G^;wSE>T9E]rj/_`VF&nckBMX9T' );
define( 'NONCE_KEY',        'S9%DIgS?E*]FFd_SkeKueYh|T_)|p>ME4c#e]Q[5&`*(`*i^ag>E#*xc2^QPYS)G' );
define( 'AUTH_SALT',        '~c u@@v]|dk9L,nn-qHd|kL5T=p9O*UYAY5pSVTjw:*{JQL5l%>R 4~&TTYt0poA' );
define( 'SECURE_AUTH_SALT', '.RvWu9Ao|{LL&aKOx{Cs-]vV%@{ga)*h)!h?t0nM+a<+cJMq%yh` ^`$)xh<8Aie' );
define( 'LOGGED_IN_SALT',   '13Fd9`@m}!9Zw-0D-r66%b;6O/y33r=?cU=II<Y4~8VY8%4tGl),WPUN)PG::fq=' );
define( 'NONCE_SALT',       'Sd+(SAnGAN$<~ASY:>d;kFh}v@]rem8uV+.MlN`a7gw{P,XIr3}=DHCWM):oV:C9' );

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
