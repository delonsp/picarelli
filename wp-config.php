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
<<<<<<< HEAD
define('DB_NAME', 'picarelli');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');
=======
define('DB_NAME', 'picarellidiagn');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'picarellidiagn');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'kQ1QRjx7q');

/** nome do host do MySQL */
define('DB_HOST', 'mysql01.picarellidiagnosticos.com.br');
>>>>>>> a797504814edc2d0b61b81e92add8b20849d0436

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
<<<<<<< HEAD
define('AUTH_KEY',         'bWe@l!Z^H6l%lxyMBuy*B#io+x?Jvj>[A~Nj7#|8`D#M~g#k52Wm3N0CQrtEHh4a');
define('SECURE_AUTH_KEY',  'xb=Vg9-D|/oLezx{^3gP,_ns(z$e&A|S07J?sJ|);)Gfi$-,4N%@bOki{DU#[-BD');
define('LOGGED_IN_KEY',    '|F#|-D~hSG2FXPL)30Q6G JX_|UxX%s^vPj>UtPRD:~</QS-,K-9g~zzD8GYVrSx');
define('NONCE_KEY',        '~~SyJ$|Y}!y%iZ||2@PzZS2-~dlKWm,^-N)qy([R&z{gFmFHLSDNH0y.&e$;gjZv');
define('AUTH_SALT',        'v9-U(X9DMJyn2&a+zE}t-8++7QWV:Z)k.$9+zN_ S+K&V-Y=0cq%@V+Fx:b+O]Q-');
define('SECURE_AUTH_SALT', 'Hj$lA]FAif-3c!}i#SX-PvYpW*:4`IUv}ij:XA]SI7%PT.Nk$iv.KDJ^T@tq!BSm');
define('LOGGED_IN_SALT',   'TX|rGPD .oG[bu@d+|wyK,Lsjz~IEO5q?KFBM-=TDbsDhm9$ [,q:wnN.%4a+XFK');
define('NONCE_SALT',       '>|J1~8)~>4s~+CD*nIP_)zE3J-s@e+n&`qGI ]YL9)TQ ROaAKUn(C<=j`yBjE6G');
=======
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');
>>>>>>> a797504814edc2d0b61b81e92add8b20849d0436

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
<<<<<<< HEAD
$table_prefix  = 'wp_';
=======
$table_prefix  = 'wp_';
>>>>>>> a797504814edc2d0b61b81e92add8b20849d0436

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
