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
define( 'DB_NAME', '10minutos' );

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
