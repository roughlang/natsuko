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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'app' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9dFI2NYGYGBi/F}2+~z3M4Omb.* Sjs+gRA0G.aLumLt=,gsq|`Q|}b5]pXLW?/^' );
define( 'SECURE_AUTH_KEY',  '@IWI2bdMP%f;Zym?/EUW7:l/-^Nz+ApF/~sd3s_H)LT*Jcg[&R5!hIQF2M6LxRCP' );
define( 'LOGGED_IN_KEY',    'y%afz9yd|%06(IP]f)Sek|.oh%%x9z9{+95w8BPKf6@IRPX+A;[EFn}A5bPE<&ue' );
define( 'NONCE_KEY',        'cXfb pY+lCIt)zhSa,y.&t>tAia/OaAomc>VSWp&sd$#u!KK(iBbRJPZPnN#r$,Y' );
define( 'AUTH_SALT',        'C%kFj.S7%s/t2X)[unVB57F>H<1iY|3x0OS|[d>)&gHI,ZV-hb${{ !LAd|wKec7' );
define( 'SECURE_AUTH_SALT', '9$f2.`|CF/o;hQ<3HY@zZ7uRo}Uk9`M,q#g@Xe5!6|Ao$iuK*KV/q+vS2$I)7HIq' );
define( 'LOGGED_IN_SALT',   '1f^m#JYld]6MbsJ9L/n-~9E`[xs{87IxL-ubR 0c4bE6(fD9Q dVpDFr,UU5~ph2' );
define( 'NONCE_SALT',       '![I]Z0.[fWbC7-UcROEZIybk#c[yaS[uQ>%7;V`6<ILQPy(h0E<esV{_]DMNvoDl' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = '208_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
