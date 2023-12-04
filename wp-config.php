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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cursoslista' );

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
define( 'AUTH_KEY',         '?Cay0jFssIW.*8ACuRVCJ(<08g|&)q4c!D,`/9oDBa;.FWsVc.d.%A&tktji(,[)' );
define( 'SECURE_AUTH_KEY',  '[7a#0?9NeYPrU.?:jM)dCdCv&;U+p0Q#xcd5:r>|KD(G$ZJf]b#9y^ZuJ[+j+F^(' );
define( 'LOGGED_IN_KEY',    ' t@zM:,eVL]fL!Dc-)Y*y%^mHv%::~< >aphm8[1x.Q[~DlKX4LeQWxD:VG#W.W<' );
define( 'NONCE_KEY',        ';{kLjO9=,rh@;0[-2!:VY5`!zW~/q.bU)c%=i:YK|M]amVOVRGpi^Ry0^`p-(/T_' );
define( 'AUTH_SALT',        '0MzW{T,i{ 9V>%9M!`n!D%FLv+=$Ln{tYSPh4gi..AMbb!pZLul?ya]M3(+,)CBN' );
define( 'SECURE_AUTH_SALT', 'r+j9u#)Ip/BV]R Y*5#v$^`4y1Jb+JkN9^BO%d5ok5^+_C)Z89m9;EoF3--25t0}' );
define( 'LOGGED_IN_SALT',   'Z,qvF*jJ&/)AF>N7y{3~0ru,s(|rXJ;.tu}lW_0fQRG2/8,PVI}FS4L?~<E~Iws|' );
define( 'NONCE_SALT',       '/=^2BX2qRa3S26<KYJ@~:6GW<Y)!yYU$9Q$(%Fgb;S!e)7l+v)4|epcAEKpL_E9k' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
