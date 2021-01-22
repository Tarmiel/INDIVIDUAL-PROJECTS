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
define( 'DB_NAME', 'wp_SmartCell' );

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
define( 'FS_METHOD','direct');
/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
