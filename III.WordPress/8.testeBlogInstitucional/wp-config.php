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
define( 'DB_NAME', 'wp_blogInstitucional' );

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
define( 'AUTH_KEY',         '[C];6d=L>62{W2L$rl9C:LEB;6_~M3}M}jtmG:`;OvJv$1&y2bKI!45M7I7s5VBL' );
define( 'SECURE_AUTH_KEY',  'VFd52j$Fi=HJ>1e^xza<QzAs-@n&(2u5v%kkWc#sj{{<G4pZR/^QJZpc~e/1lOW&' );
define( 'LOGGED_IN_KEY',    '/Z?BBA2 86 Uwz]HY<amti{Z p(m#{^!]YU3>glL|T<,+6mIT ,_3Obg:aJ`Oc~z' );
define( 'NONCE_KEY',        'DBPfp;`7kxI{Bgo,}+ouxHCHmWkELxX7ND4fS-R+J};).,!X2rtyFGv+J%@?)~eK' );
define( 'AUTH_SALT',        'Ig/xPBCV+i9[k1>&RzU`rmv-{y8XiuzvQ51|(fOVU)b?=Lnj7h;5F)<p=y%Pdg}#' );
define( 'SECURE_AUTH_SALT', '1mY(NZ2X&NICSNj7g:/5N|kb0t[r|amELv]w%Ob}{sR[@^(hKPX<B;GG#<sr>>~e' );
define( 'LOGGED_IN_SALT',   'q~=JvVQDpo GfGE/6ej F?:6;Rk@GfWp&_Q(K=%%1>mU:e-W>%p;~;ywLQ!U9pxJ' );
define( 'NONCE_SALT',       'd+d,+*<6P^ qEVY@$$#c7&r<L9wZy;1h_ouv/EJUk$d]ag4h6h(T0027k:Q3Crq[' );

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
define('FS_METHOD','direct');
/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
