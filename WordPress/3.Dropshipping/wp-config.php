<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp_dropshipping' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
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
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'FS_METHOD', 'direct' );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
