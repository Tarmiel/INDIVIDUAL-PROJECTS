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
define( 'DB_NAME', 'wp_lolja' );

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
