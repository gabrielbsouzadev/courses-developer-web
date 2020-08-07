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
define( 'DB_NAME', 'alura' );

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
define( 'AUTH_KEY',         '@zn>!%ogyEzE7XIgtKL0/PMr,JLMr)9u%6/@B?C4j2jC@t&+5_BEtI9)pIVUkrgq' );
define( 'SECURE_AUTH_KEY',  '9JA.c9*NHl./~C0pwp-:%!r|nbEBa=O&&$I|zS{^a:t_EPYx1Sv@dLqV+GZeD9D.' );
define( 'LOGGED_IN_KEY',    'KLq<,a*b;ZIJ9H%656^l28E/^*o5/I|k/GG&E6K+k0|/Rf2|O{g+*MVKb$[g&J#3' );
define( 'NONCE_KEY',        'sdlTI)bpzrUyA`NN:(d!5N5`h&71 ]^DEC;Uu=kkPq2ETedQ@orn5h4#X&Il{O2J' );
define( 'AUTH_SALT',        'JlZFXE6AmlFbN~rFey7$@ZY;1yLLXpz>D`<]R<mOfFY9;1)g]GZ%+Lke38g4n5[P' );
define( 'SECURE_AUTH_SALT', 'H+;P<dXEUo:6UH!+X(&wy[#TELOO2E#,B:ViJ~!}W{O{dngrG|[@]kHrLhWI%i$_' );
define( 'LOGGED_IN_SALT',   '7ozz&q)(@6N**:$yr}P7=1?=BV_.%|B58IKwK}4O^XGG8G@3zt}FDlaBFCQ/np5h' );
define( 'NONCE_SALT',       'Ly&Tv{`1lUa8S9H_jO01><|=y2 L3~~,M]RpEn$]L:jMDITjyXUHQ[PV].y6MQ?/' );

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
