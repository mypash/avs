<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wp');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&*&:n1X<Vs}AEd+Rw,~Eq3(D%7HG{YU}6x}cNu*)?2?GwZBC};Ix?)oJv$z+`8KL');
define('SECURE_AUTH_KEY',  '=k^5dg+4=j;oD0X42_G T+Ba^xkt=HH{JJrK+Vp>/rfH|PZ-d!OxF8K-Gl-V@/3z');
define('LOGGED_IN_KEY',    '!H}sFH+?n|8TZA|2I$Jj8&V@L6#hUv,iq@x7z!YJjlOqTx_@1m{wsWejbov.&1$l');
define('NONCE_KEY',        '?!<(M>B2]+wQ-,U^SezD1O2&&_R8+ g(w6-90e_%Kdrx>{m6x2Ql-]U_jOzuRoB6');
define('AUTH_SALT',        'kWq*t,Dp|F]@s5r /G=}/qh7U85HQ!flC[:G+<lYQp5})0O@)Ow+L{uZL0O+P]*}');
define('SECURE_AUTH_SALT', 'Uy@bh(|3lO+J,LD|_Yo|ISn+)|efKX@p)H>BAc4|ZdQ])lIztjs[-EN4-VMIGBR!');
define('LOGGED_IN_SALT',   'f3yD*UurnD]):f*IwRBJ+_l(_k`VtbjeLt~-^dO-]L~R=t v?N|++EIQeu/=s>|G');
define('NONCE_SALT',       'I4B]1T]j@Er{_[~}G!EGh|5I7?z?N!o`fHr1J/%Abir%:p](@@q)fmc]5JPeF-60');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
