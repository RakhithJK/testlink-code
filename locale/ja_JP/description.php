<?php
/** -------------------------------------------------------------------------------------
 * ♔ TestLink Open Source Project - http://testlink.sourceforge.net/
 *
 * Filename $RCSfile: description.php,v $
 * @version $Revision: 1.4 $
 * @modified $Date: 2010/06/24 17:25:53 $ $Author: asimon83 $
 * @author Martin Havlat
 *
 * LOCALIZATION:
 * === Japanese (ja_JP) strings ===
 *
 * @ABSTRACT
 * The file contains global variables with html text. These variables are used as
 * HELP or DESCRIPTION. To avoid override of other globals we are using "Test Link String"
 * prefix '$TLS_hlp_' or '$TLS_txt_'. This must be a reserved prefix.
 *
 * Contributors:
 * Add your localization to TestLink tracker as attachment to update the next release
 * for your language.
 *
 * No revision is stored for the the file - see CVS history
 * The initial data are based on help files stored in gui/help/<lang>/ directory.
 * This directory is obsolete now. It serves as source for localization contributors only.
 *
 *-------------------------------------------------------------------
 * Japanese translation
 *-------------------------------------------------------------------
 * Testing Engineer's Forum (TEF) in Japan
 * Working Group of TestLink Japanese Translation Project
 *
 * http://blues.se.uec.ac.jp/swtest/
 * http://testlinkjp.org/
 * http://sourceforge.jp/projects/testlinkjp/
 *
 * Adviser:
 * Yasuharu NISHI
 *
 * Core member:
 * Atsushi Nagata,       AZMA Daisuke,         Hiromi Nishiyama,
 * Kaname Mochizuki,     Kaoru Nakamura,       Kunio Murakami,
 * Lumina Nishihara,     Marino Suda,          Masahide Katsumata,
 * Masami Ichikawa,      Masataka Yoneta,      Sadahiko Hantani,
 * Shinichi Sugiyama,    Shinsuke Matsuki,     Shizuka Ban,
 * Takahiro Wada,        Toshinori Sawaguchi,  Toshiyuki Kawanishi,
 * Yasuhiko Okada,       Yoichi Kunihiro,      Yoshihiro Yoshimura,
 * Yukiko Kajino
 *
 * ----------------------------------------------------------------------------------- */

// printFilter.html
$TLS_hlp_generateDocOptions = "<h2>テストケース印刷のオプション</h2>

<p><p>この表により表示するテストケースをフィルタリングすることができます。
選択したデータを表示します。
チェックを変更したり、「印刷オプション」ボタンをクリックしたり、
必要なデータのレベルをツリーから選択したりすることで
表示するデータを切り替えることができます。</p>

<p><b>ドキュメントのヘッダ:</b> ドキュメントのヘッダ情報をフィルタリングすることもできます。
ドキュメントのヘッダ情報には以下のものが含まれます:
イントロダクション、スコープ、参照、テスト手法、テストの制限事項。</p>

<p><b>テストケース本体:</b> テストケース本体に含まれる情報をフィルタリングすることもできます。
テストケース本体には以下の情報が含まれます:
概要、ステップ、実行結果、キーワード。</p>

<p><b>テストケースの概要:</b> テストケースのタイトルから、テストケースの概要情報をフィルタリングすることもできます。
しかし、テストケース本体から概要をフィルタリングすることはできません。
テストケースのタイトルを表示するときに、
概要のみを表示して、その他のステップ、実行結果、
キーワードを非表示にすることはできます。
しかし、テストケース本体を表示するときには必ずテスト概要は表示されます。</p>

<p><b>目次:</b> TestLinkは全てのタイトルのリストを内部のハイパーリンク付きで挿入します。</p>

<p><b>出力形式:</b> HTMLとMS Wordの２種類の形式で出力することができます。
後者の場合、ブラウザがMS Wordのコンポーネントを自動で読み込み、ドキュメントを表示します。</p>";

// testPlan.html
$TLS_hlp_testPlan = "<h2>テスト計画</h2>

<h3>一般</h3>
<p>テスト計画は、システムをテストするための体系的なアプローチを提供します。
プロダクトのビルドや結果の追跡などのテストのアクティビティを管理することができます。</p>

<h3>テスト実行</h3>
<p>このページでは、ユーザがテストケースを実行し（テスト結果を登録し）、テスト計画のテストケーススイートを印刷できます。
このページでは、、ユーザが彼らの行ったテストケースの結果を追跡することもできます。</p>

<h2>テスト計画管理</h2>
<p>このページにアクセスできるのはリーダーだけです。このページではテスト計画の管理が出来ます。
テスト計画の管理には、計画の作成/編集/削除、
（テスト計画の中にある）テストケースの追加/編集/削除/アップデート、
ビルド作成と同様に、テスト計画のアクセス制御といった作業も含まれます。<br />
リーダー権限を持つユーザは、優先度、リスク、テストケーススイート（カテゴリー）の所有権と、
テストのマイルストーンを作ることができます。</p>

<p>注意: テスト計画のドロップダウンにテスト計画が表示されない場合もあります。
このような状況では、すべてのリンクを使用することができないでしょう。
テストリーダもしくは管理者に連絡を取り、権限をアサインしてもらうか
新たなテスト計画を作成してもらうようにしてください。</p>";

// custom_fields.html
$TLS_hlp_customFields = "<h2>カスタムフィールド</h2>
<p>カスタムフィールドは以下のように実装されています:</p>
<ul>
<li>定義したカスタムフィールドはシステム全体で使用することができます。</li>
<li>カスタムフィールドはひとつのテスト要素に関連付けられます (テストスイート, テストケース)</li>
<li>カスタムフィールドは複数のテストプロジェクトの要素に関連付ける事ができます。</li>
<li>カスタムフィールドの表示順はテストプロジェクトごとに異なります。</li>
<li>特定のテストプロジェクトに対して、あるカスタムフィールドを無効にすることができます。</li>
<li>カスタムフィールドの数に制限はありません。</li>
</ul>
<br>
カスタムフィールドの定義には以下の属性が含まれています:<br>
<ul>
<li>カスタムフィールドの名称<br>
</li>
<li>変数名 (例: lang_get() APIによって提供されている変数、
または、言語ファイルではなく直接ソースに記載されている変数。</li>
<li>カスタムフィールドの型 (string, numeric, float, enum,
email)</li>
<li>フィールドの設定可能な値の一覧 (例: RED|YELLOW|BLUE)。
リスト、マルチセレクションリスト、コンボタイプに適用できます。<br />
<i>一覧の値を分割するために
パイプ文字 ('|') を使用します。空白文字も設定可能です。</i>
</li>
<li>デフォルト値 <b>(まだ実装されていません)</b><br>
</li>
<li>カスタムフィールドの設定値の最大長/最小長。
(0を設定すると無効フィールドが無効になります。) <b>(まだ実装されていません)</b></li>
<li>入力にフィルターをかけるための正規表現。この正規表現にマッチした入力のみを受け付けます。
(<a href='http://au.php.net/manual/en/function.ereg.php'>ereg()</a>
にある文法を使用します。) <b>(まだ実装されていません)</b></li>
<li>すべてのカスタムフィールドは
VARCHAR(255) 型としてデータベースに保存されます。<br>
</li>
<li>テスト仕様の画面上に表示されます。</li>
<li>テスト仕様の画面上でカスタムフィールドを有効に設定することができます。テスト仕様の設計中にカスタムフィールドの値を変更することができます。<br>
</li>
<li>テスト実行の画面上に表示されます。</li>
<li>テスト実行の画面上でカスタムフィールドを有効に設定することができます。テスト実行の設計中にカスタムフィールドの値を変更することができます。<br>
</li>
<li>カスタムフィールドがどんな項目に属しているかを選択することが可能です。<br>
</li>
</ul>
";

// execMain.html
$TLS_hlp_executeMain = "<h2>テストケースの実行</h2>
<p>ユーザにテストケースの「実行」を許可します。実行自体は単にビルドに対する結果
(成功,失敗,ブロック)をテストケースに割り当てています。</p>
<p>バグ管理システムにアクセスするように設定することも可能です。
その場合は、バグの登録や、既存バグの閲覧などをおこなうことができます。</p>";

//bug_add.html
$TLS_hlp_btsIntegration = "<h2>テストケースとバグを関連付ける</h2>
<p><i>設定を行った場合</i>
TestLinkはバグ管理システム(BTS)とスムーズに連携することができます。 <br>
BTSにバグ作成リクエストを送信すると、BUG IDを受け取ることができます。<br>
BTSのページへの関連付けは、以下の機能を備えています：
<ul>
<li>新しいバグの挿入 </li>
<li>現行のバグ情報の表示 </li>
</ul>
</p>

<h2>バグ追加の手順: </h2>
<p>
   <ul>
   <li>手順 1: 連結して公開するBTSに新しいバグを挿入する </li>
   <li>手順 2: BTSでBUG IDを割り当てる</li>
   <li>手順 3: 入力項目にBUG IDを入力する</li>
   <li>手順 4: 「バグ追加」ボタンをクリックする</li>
   </ul>

バグ追加ページを閉じた後、問題となっているバグのデータをテスト実行ページから確かめることができます。
</p>";

// execFilter.html
$TLS_hlp_executeFilter = "<h2>テスト実行時のビルドによるフィルタリング</h2>

<p>左側のシートは、現在のテスト計画にアサインされているテストケースのナビゲータ、および、" .
"設定とフィルターの一覧表で構成されています。" .
"このフィルターを使用することでテスト実行前にテストケースを絞り込むことができます。" .
"フィルターのオブションを設定し「適用」ボタンをクリックした後に、" .
"ツリーからテストケースを選択します。</p>

<h3>ビルドによるフィルター</h3>
<p>ビルドごとにフィルターをかけることもできます。" .
"テストケースの記録を追うための最も基本的な要素がビルドです。" .
"各テストケースは、ビルド内で複数回実行できますが最終結果として登録されるのは1つのみです。
<br />新規ビルドの作成のページで新規ビルドを作成することができます。</p>

<h3>テストケースのIDによるフィルター</h3>
<p>テストケースを識別するID番号によってフィルターをかけることができます。このIDは、
テストケース作成時に自動で生成されます。この欄を空欄にするとフィルターが無効になります。</p>

<h3>優先度によるフィルター</h3>
<p>優先度によりフィルターをかけることができます。各テストケースには重要度が、" .
"テスト計画には緊急度が設定され、優先度が計算されます。例えば、優先度「高」のフィルターでは、" .
"重要度もしくは緊急度が「高」で、もう一方が「中」以上のテストケースを表示します。</p>

<h3>結果によるフィルター</h3>
<p>テストの結果ごとにフィルターをかけることもできます。
テスト結果は、あるビルドでテストケースの実行中に何があったかを表しています。
テストケースの実行の結果として、成功、失敗、ブロック、未実行のいずれかのステータスが与えられます。" .
"このフィルターはデフォルトでは無効になっています。</p>

<h3>テスト担当者によるフィルター</h3>
<p>アサイン計画に従ってフィルターをかけることができます。また、「未アサインを含む」の" .
"チェックボックスにより、アサインされていないテストケースを表示することができます。</p>";
/*
<h2>最新の結果</h2>
<p>デフォルト、または「最新」のチェックボックスがオフの場合、ツリーは
ドロップダウンボックスから選択されたビルドによってソートされます。
この状態では、ツリーにテストケースのステータスが表示されます。
<br />例: ユーザーが、ドロップダウンボックスからビルド2を選択し、「最新」のチェックボックスを
オフにします。ビルド2からすべてのテストケースがステータスとともに表示されます。
したがって、ビルド2でテストケース1がパスすると緑色になります。
<br />ユーザが「最新」のチェックボックスをオンにした場合、
ツリーは最新のテストケースの結果で色が決まります。
<br />例: ユーザーがドロップダウンボックスからビルド2を選択し、今回は「最新」のチェックボックスをチェックします。
すべてのテストケースは最新の状態で表示されます。 したがって、ビルド3でテストケース1がパスした場合、
ユーザーがビルド2も選択していても、緑色になります。</p>
 */


// newest_tcversions.html
$TLS_hlp_planTcModified = "<h2>テストケースの最新バージョンを関連づける</h2>
<p>テスト計画に関連づけられたテストケース全体は分析され、最新バージョンのテストケース一覧が表示されます。
</p>";


// requirementsCoverage.html
$TLS_hlp_requirementsCoverage = "<h2>要件網羅率</h2>
<br />
<p>この機能を用いると、ユーザまたはシステムが要求するテストケースの網羅率のマップを作成できます。
ホームの「要件仕様」リンクから操作できます。</p>

<h3>要件仕様</h3>
<p>各要件は、テストプロジェクトごとに作成する<b>要件仕様ドキュメント</b>によって
まとめられています。<br />ただし、TestLink 自体には、要件仕様、および要件の
バージョン管理機能はサポートされていません。もし、バージョンを考慮する必要がある場合は、
バージョン番号を含めた題号を<b>タイトル</b>欄に記載してください。
また、仕様の簡単な説明や備考を<b>スコープ</b>欄に記載することができます。</p>

<p><b>ドキュメント内の全要件数</b> は、
TestLinkに全要件を登録しなかった場合の要件網羅率を計算するために使用します。
値<b>0</b>を設定した場合は、TestLinkに登録されている要件数を指標計算で使用します。</p>
<p><i>例えば、SRSが 200 の要件を含んでいるが、50のみをTestLinkに登録したとします。
するとテストの要件網羅率は25%となります (追加した要件を全てテストした場合)。</i></p>

<h3>要件</h3>
<p>要件を作成する要件仕様のタイトルをクリックしてください。
要件をドキュメントに作成、編集、削除、または要件をインポートすることができます。
どの要件もタイトル、スコープ、ステータスがあります。
ステータスは「通常」または「テスト不能」から選択する必要があります。
テスト不能要件は指標計算で使用されません。
このパラメータは実装されていない機能、間違った設計の要件のために使用されます。</p>

<p>要件仕様のページから、数回ボタンをクリックすることで、
要件をチェックするための新規テストケースを作成することができます。
これらのテストケースは、TestLinkの設定で定義された名前のテストスイートに格納されます
<i>(デフォルトでは \$tlCfg->req_cfg->default_testsuite_name =
'Test suite created by Requirement - Auto';)</i>。
タイトルとスコープは作成されたテストケースにコピーされます。</p>
";

$TLS_hlp_req_coverage_table = "<h3>網羅率:</h3>
\"40% (8/20)\"とあった場合、20はこの要件から生成されるべきテストケース数、
8は、既にこの要件から生成され、紐付けられたテストケース数、これらの値から網羅率は40%となります。
";


// req_edit
$TLS_hlp_req_edit = "<h3>スコープの内部リンク:</h3>
<p>内部リンクは、他の要件/要件仕様へのリンクを作成する目的で特別な構文で提供されます。 
内部リンクの動作は、設定ファイルで変更できます。
<br /><br />
<b>使用方法:</b>
<br />
要件へのリンク: [req]req_doc_id[/req]<br />
要件仕様へのリンク: [req_spec]req_spec_doc_id[/req_spec]</p>

<p>ジャンプ先の要件/要件仕様のテストプロジェクト、バージョン、
アンカーを指定することもできます<br />
[req tproj=&lt;tproj_prefix&gt; anchor=&lt;anchor_name&gt; version=&lt;version_number&gt;]req_doc_id[/req]<br />
この構文は、要件仕様でも機能します (バージョン属性は効果がありません)。<br />
バージョンを指定しない場合は、すべてのバージョンを含む要件全体が表示されます。</p>

<h3>変更のログメッセージ:</h3>
<p>変更が行われるたびに、Testlinkはログメッセージを要求します。 このログメッセージは、トレーサビリティを目的に提供されます。
要件のスコープのみが変更された場合は、新しいリビジョンを作成するかどうかを自由に決めることができます。
スコープ以外のものが変更された場合は、常に新しいリビジョンを作成する必要があります。</p>
";


// req_view
$TLS_hlp_req_view = "<h3>ダイレクトリンク:</h3>
<p>このドキュメントを他のユーザーと簡単に共有するには、このドキュメントの上部にある地球のアイコンをクリックしてダイレクトリンクを作成します。</p>

<h3>履歴の表示:</h3>
<p>この機能により、複数の要件のリビジョン/バージョンが存在する場合、要件のリビジョン/バージョンを比較することができます。
概要は、各リビジョン/バージョン、タイムスタンプ、および最後に変更した作成者のログメッセージを提供します。</p>

<h3>網羅率:</h3>
<p>この要件にリンクされるすべてのテストケースを表示します。</p>

<h3>関連:</h3>
<p>要件の関連は、要件間の関連をモデル化するために使用されます。
カスタムの関連と、異なるテストプロジェクトの要件間の関連を許可するオプションは、
設定ファイルで設定できます。
「要件Aは要件Bの親」という関連を設定する場合、
Testlinkは、「要件Bは要件Aの子」という関連を暗黙的に設定します</p>
";


// req_spec_edit
$TLS_hlp_req_spec_edit = "<h3>スコープの内部リンク:</h3>
<p>内部リンクは、他の要件/要件仕様へのリンクを作成する目的で特別な構文で提供されます。 
内部リンクの動作は、設定ファイルで変更できます。
<br /><br />
<b>使用方法:</b>
<br />
要件へのリンク: [req]req_doc_id[/req]<br />
要件仕様へのリンク: [req_spec]req_spec_doc_id[/req_spec]</p>

<p>ジャンプ先の要件/要件仕様のテストプロジェクト、バージョン、
アンカーを指定することもできます<br />
[req tproj=&lt;tproj_prefix&gt; anchor=&lt;anchor_name&gt; version=&lt;version_number&gt;]req_doc_id[/req]<br />
この構文は、要件仕様でも機能します (バージョン属性は効果がありません)。<br />
バージョンを指定しない場合は、すべてのバージョンを含む要件全体が表示されます。</p>
";


// planAddTC_m1.tpl
$TLS_hlp_planAddTC = "<h2>「カスタムフィールドの保存」について</h2>
例えば、以下のカスタムフィールドをテストプロジェクトで定義およびアサインするとします。<br />
「テスト計画で表示する=true」および<br />
「テスト計画で有効にする=true」<br />
このとき、テスト計画にアサインされたテストケースに関するページのみでこのカスタムフィールドが表示されいます。
";


// resultsByTesterPerBuild.tpl
$TLS_hlp_results_by_tester_per_build_table = <<<'TLS_hlp_results_by_tester_per_build_table'
<b>テスト担当者に関する更なる情報</b><br/>
担当者名をクリックすると、その担当者に割り当てられた全テストケースと、彼のテスト進捗に関する詳細を見ることが出来ます。<br/><br/>
<b>注記</b><br/>
このレポートは、指定の担当者に割り当てられ、活性化中の各ビルドに基づいて実行されたテストケースを表示します。<br/>
ただし、割り当てられたのとは別のユーザーが実施したテストケースは、別のユーザーの実施ケースとして表示されます。
TLS_hlp_results_by_tester_per_build_table;
/*
"<b>More information about testers:</b><br />
If you click on a tester name in this table, you will get a more detailed overview
about all Test Cases assigned to that user and his testing progress.<br /><br />
<b>Note:</b><br />
This Report shows those test cases, which are assigned to a specific user and have been executed
based on each active build. Even if a test case has been executed by another user than the assigned user,
the test case will appear as executed for the assigned user.
";
*/

// xxx.html
//$TLS_hlp_xxx = "";

// ----- END ------------------------------------------------------------------
?>
