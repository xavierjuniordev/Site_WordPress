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
define( 'DB_NAME', 'aula' );

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
define( 'AUTH_KEY',         '^sM^SarV(77tVHJoF^S!$Xu(_zY-1tSn)}? 6kCJ{aJ{>{t3[o-hPuF(zwa+P748' );
define( 'SECURE_AUTH_KEY',  '|jn/NY;q%JY`hrw-^=8-cohd=@$WJa9~ySI<Ooud;u~)(9[wF(`s4l~cFd3Zj&:+' );
define( 'LOGGED_IN_KEY',    'NF(bb,)!!24%k3<o9eUGQoD-k4E+xhdY>`zz/m/pP+dgzC-lo~ia0eGWaiXA3l1v' );
define( 'NONCE_KEY',        'dP-Y92ed|&#[sT-|`pdO;spru`#&[~2$%HWfk]^T=@kA &T!<9:u64V)hfF#QKp)' );
define( 'AUTH_SALT',        '@v_u39X(VnR&n9bX+%~fJn+p*#E`HATwPOlgf[$l0LLSh<]/w1$C/-2Q(rv^{FX2' );
define( 'SECURE_AUTH_SALT', ')&YMhtT_-o1$aghZpcWM Q$CAu|X`J$tl(7ufIHl{1aPYB/%Y{u{UdOmlUd:u/}N' );
define( 'LOGGED_IN_SALT',   'mhVjl]fmIie?gw4~=b0trLQH1>(!dc@3U,yNV@]xWo0:!hAo5eu#)]YOd&q ?q]x' );
define( 'NONCE_SALT',       'X]t5Yq&/S&q?OU<X;?:ixAl7wzI^iUXRc$23DoDOmx8A(M.AcIWcR>^>]d3mku`m' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
