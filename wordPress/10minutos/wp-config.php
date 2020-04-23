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
define( 'DB_NAME', '10minutos' );

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
define( 'AUTH_KEY',         'dv0<@?gF*XjAGxj;4|%OzHlXg(OHVcU;uAYzd8*I*{IT;EHovivP2V@9OcP5?*7*' );
define( 'SECURE_AUTH_KEY',  'N7^J@G8Lw,2:@*y~_9=)juenrTireT&FJDg-T~l^XAC$hstF.&eFm7hNtc;%,n>7' );
define( 'LOGGED_IN_KEY',    'Cfx.@aaDQmBs]^;g-.wDh}iOS+WN5&ypIk`Ix.@c.Hha#BF:1@ps_V4n<<_=C8x-' );
define( 'NONCE_KEY',        '=W#h<%aSLBkkk&|l{I05HoUmB_k6T~13cL8C[,c}fI(Nsz=4M1bu.j;LRX,??&{T' );
define( 'AUTH_SALT',        'kL@CIlT41g%jNzklTkaONu^MP;a|F`g>$+5@/BR)_TI(jN?J*D+N8-xSM0O)8sJ5' );
define( 'SECURE_AUTH_SALT', ';zl Z`$R*NWG($K)]`IJ  0@IyXo5u?9y|J{0y<~`9sk<_bCR|P#~SjSQdgAJua,' );
define( 'LOGGED_IN_SALT',   't8)+Ns/FOAI|}E(#;w}+iB9;6%n@&w[j[;an+8,:jn;gSjKFAMa}k$-id^Q<3sUo' );
define( 'NONCE_SALT',       '2Ksjt1#Xdw&aT6uE?)D|=V3O~-<xCj;=wL2:9,p0 <iO`]ONbN8k+06>:~b5_)-G' );

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
