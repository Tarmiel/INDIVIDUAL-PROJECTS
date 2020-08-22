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
define( 'DB_NAME', 'wp_blogInstitucional' );

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
define('FS_METHOD','direct');
/* Isto �� tudo, pode parar de editar! :) */

/** Caminho absoluto para o diret��rio WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as vari��veis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
