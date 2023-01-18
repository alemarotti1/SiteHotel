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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bd2019' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'admin' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'Silvi2410' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         ';P*5h?F^O^Zj8jO Pc6Y$Ad9 vNsX%buJC[ILD{!hKn+,%;i}x:>en>8}/v.Zb)c' );
define( 'SECURE_AUTH_KEY',  '8r2i^9Y)6p1>q1eQA]@khxF#G6Ub1?{8?GN:C&i%V.!1!=vCH-j{L4{]BIMUgjw%' );
define( 'LOGGED_IN_KEY',    'xr@`Zw/Qz[Ane`)?~i8B~g8[:WKDgyvrWE<a!0j!x7@f7:=CGD6cl&l%iW-D:?;m' );
define( 'NONCE_KEY',        'chL9lxq6JNAUM{Y31lztt #Sb9m:NNymv//6+H9h.5?P`kUJlOM(K)L29K,,v^vM' );
define( 'AUTH_SALT',        '@Pe{A@6&wQ@fBHR.inr5qu]m=m^,I<R4gTr/7W34{H+ $q2&X6|kIJyJ:gJWpK}h' );
define( 'SECURE_AUTH_SALT', 'q:D88fEN<UzI)()DD4n%)gasJ4Bm6g:7)(ek[YSeZfrBU([}6Prf3Hp^.o@8azyB' );
define( 'LOGGED_IN_SALT',   'WcPoinnhTc5!$q58jS%r)a7BKQmu|tekF?x:/:YUbGU2yM>sj&5w4YH5Gg(dB-(B' );
define( 'NONCE_SALT',       'UDQ78z/]JCV@{)@zd_Gcv!@$:.zlv9,fs!p3Gx,ORBsc?,.yI5lCGw6RvjQGU8^L' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
