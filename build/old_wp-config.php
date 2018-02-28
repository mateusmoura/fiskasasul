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
define('DB_NAME', 'fisk2018');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '= %|s*%7Ri)}uDk|r1pXL !!Sd~e);Q+tLi$b1dLh[^4nfoUA@m4z]Y `x%R0Mab');
define('SECURE_AUTH_KEY',  '|l$4` <6EDBZ?wB^`2c#++Nz,0W+n+uenahYi^rlB0M_M9zQ]Vw?z]tk|T@v:aww');
define('LOGGED_IN_KEY',    'CJD!V%|U5[F!J`J:+Z-{_r/`fS+U22=BzMz7TTt<t8iC^rDspn,X3t}Tvn+jB|w#');
define('NONCE_KEY',        '[&GOB+RuRt|nJ!yuvVN9TcTlxM{wgK|xzs0`+pQSm6P:cnbt#ELud!TyVNf;lJlv');
define('AUTH_SALT',        '[ O$_Ru?:iW~!ES^G_4i-otlEPrLIJXx#X]6J{hrWI6Uy#MH/|7k:OEHIm_7AVt#');
define('SECURE_AUTH_SALT', '0& d%l!9T#E[&>+2H#[+ZZSe!gB2n`jtmR|Z:1o~PRU41R-v9$aGsX[vGT=N]363');
define('LOGGED_IN_SALT',   '@0$LC`+)>)CsnH~=EIwqa,5h1BEWTd+`{^T`;:HnFYnGFTOX}K(@nbkbGC8@6}Z|');
define('NONCE_SALT',       'Y~A)MFF|%B=Tm~!m3Ht0l@et-%6?t9rL)FFC0M+;Bhs^1p|v%i>zs&j0g%uEi`f.');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_fisk';

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
