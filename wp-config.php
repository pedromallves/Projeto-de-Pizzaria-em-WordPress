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
define( 'DB_NAME', 'wptest' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '159753' );

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
define( 'AUTH_KEY',         'Ff%qhkT!|r#lIIC/1g?HE*Rh/wz-p!)|X&cR{^ Be0.e;r#l7O-4c26BO0qBK`3O' );
define( 'SECURE_AUTH_KEY',  'oE.ED6qye_PkqyW&Aj-8sUP+;~26,pK!D^p;5bK;~.H~p9SvJSuUb!*Z@i<Ed}m.' );
define( 'LOGGED_IN_KEY',    'GTU-(6rauLQ8>JwJm3~Le^bQf{zCrt~MdQ%(5<}ykU#YHiZn=pzAjA~f&[RCBPTS' );
define( 'NONCE_KEY',        'WO,8vlCHgRV/T<JvRab(hjhphB^}k%{L>ci/&8fRy95~L;s;}$~4S#D+u(Lx,gxX' );
define( 'AUTH_SALT',        ':r3*mLskvN`:gE/tT#/~CLi4Ap_PE+8=@GEw`JlYrH[+W!@](>-[_+e(B#-!q!^)' );
define( 'SECURE_AUTH_SALT', 'P{-;(zYPxv; Ia5R.oy.69z)gGl}S<IIiU*-#d}%jJBt:waFE GWQo?@8Z9ne/AL' );
define( 'LOGGED_IN_SALT',   'u.*)bu_T-1WL6q`7fNuG@+Z%XyG>v-Vi1T^R*1cC=,y.kM+GAQT 0Kj+.pzZ^bjM' );
define( 'NONCE_SALT',       'W>cDy_k.?b.8;C}]qnenhGU`#g_C^nHPMz:fG3mtJPFhL2  lLkXG~t7Mw5?#cE@' );

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
