<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zK3{&cjnAQiNnnt;(K|@#AQ5vc/qp_{E@!.6bO)9DO[GZ+%p7]L(Hv%Pg_;VjEyl');
define('SECURE_AUTH_KEY',  '|jQkpv-Z%#mDw-jj>>&x/Ub-YLs$ZoQ9jO4<qE_`Mdk+xi/qjd=^M^(@TtCKWYL{');
define('LOGGED_IN_KEY',    'mQm|=V##=8X~|CI`Tvy*p_]1Um!R[p/~*yhBOLw.%7[;kIh[nyiQ,j|1$B[ He86');
define('NONCE_KEY',        'g8~-JD~YOjl>tO32{]h3,E()g-iet|tfx EgNQuiz8$z:Ml-n_01S%cYWZS{VtI[');
define('AUTH_SALT',        '^Y(|O0m>9V!^{f1z>k$Qf3}a JNFP$KOhLaM$ia?2{kD=s<y`6!~4oyG^O2X^d4v');
define('SECURE_AUTH_SALT', '>)_9I~R=.T!2NQE@xN)]bL8|%(5oSTGZix[0O1q&U|0lq+K|g*]00qu@t6Hy%0g&');
define('LOGGED_IN_SALT',   'R>x0:bk IFbx=+UT~&WaC~~q]a`$XH6ffS5/wl{!NHC3V(]rI;$s+dKfx#_kH3!$');
define('NONCE_SALT',       'MF->.><:{73rn_/=(djNI=:+jrZGNVnwidH:#$M$=]nd&L%}t4ix55yl~w|[>:3N');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
