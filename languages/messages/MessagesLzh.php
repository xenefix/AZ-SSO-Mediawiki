<?php
/** Literary Chinese (文言)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author C933103
 * @author Itsmine
 * @author Justincheng12345
 * @author Omnipaedista
 * @author Shinjiman
 * @author Simon Shek
 * @author StephDC
 * @author Super Wang
 * @author Xiaomingyan
 * @author Yanteng3
 */

$specialPageAliases = [
	'Activeusers'               => [ '躍簿' ],
	'Allmessages'               => [ '官話' ],
	'Allpages'                  => [ '全典' ],
	'Ancientpages'              => [ '陳年' ],
	'Blankpage'                 => [ '白頁' ],
	'Booksources'               => [ '書海' ],
	'BrokenRedirects'           => [ '斷渡' ],
	'Categories'                => [ '類' ],
	'ChangeEmail'               => [ '易郵' ],
	'ChangePassword'            => [ '易符節' ],
	'ComparePages'              => [ '較頁' ],
	'Confirmemail'              => [ '核郵驛' ],
	'Contributions'             => [ '功績' ],
	'CreateAccount'             => [ '增簿' ],
	'Deadendpages'              => [ '此無路也' ],
	'DeletedContributions'      => [ '已刪之積' ],
	'Diff'                      => [ '異' ],
	'DoubleRedirects'           => [ '窮渡' ],
	'EditWatchlist'             => [ '治哨站' ],
	'Emailuser'                 => [ '遺書' ],
	'Export'                    => [ '出匯' ],
	'Fewestrevisions'           => [ '鮮察' ],
	'FileDuplicateSearch'       => [ '擇重檔' ],
	'Filepath'                  => [ '檔路' ],
	'Import'                    => [ '圖入匯' ],
	'Invalidateemail'           => [ '消核郵驛' ],
	'BlockList'                 => [ '列禁簿、禁址' ],
	'LinkSearch'                => [ '尋網連' ],
	'Listfiles'                 => [ '見檔' ],
	'Listgrouprights'           => [ '權任一覽' ],
	'Listredirects'             => [ '表轉' ],
	'Listusers'                 => [ '點簿' ],
	'Lockdb'                    => [ '閉庫' ],
	'Log'                       => [ '誌' ],
	'Lonelypages'               => [ '孤寡' ],
	'Longpages'                 => [ '長言' ],
	'MergeHistory'              => [ '併頁之誌' ],
	'MIMEsearch'                => [ '篩檔' ],
	'Mostcategories'            => [ '跨船' ],
	'Mostimages'                => [ '名檔' ],
	'Mostlinked'                => [ '好料' ],
	'Mostlinkedcategories'      => [ '豪門' ],
	'Mostlinkedtemplates'       => [ '美模' ],
	'Mostrevisions'             => [ '屢審' ],
	'Movepage'                  => [ '遷' ],
	'Mycontributions'           => [ '吾績' ],
	'Mypage'                    => [ '吾頁' ],
	'Mytalk'                    => [ '吾書房' ],
	'Newimages'                 => [ '新圖之廊' ],
	'Newpages'                  => [ '新灶' ],
	'Preferences'               => [ '簿註' ],
	'Prefixindex'               => [ '依名索引' ],
	'Protectedpages'            => [ '頁錮' ],
	'Randompage'                => [ '清風翻書' ],
	'Randomredirect'            => [ '任渡' ],
	'Recentchanges'             => [ '近易' ],
	'Recentchangeslinked'       => [ '援引' ],
	'Search'                    => [ '尋' ],
	'Shortpages'                => [ '短篇' ],
	'Specialpages'              => [ '特查' ],
	'Statistics'                => [ '彙統' ],
	'Uncategorizedcategories'   => [ '問栓' ],
	'Uncategorizedimages'       => [ '候裱' ],
	'Uncategorizedpages'        => [ '欲訂' ],
	'Uncategorizedtemplates'    => [ '待蘸' ],
	'Undelete'                  => [ '覽刪' ],
	'Unlockdb'                  => [ '開庫' ],
	'Unusedcategories'          => [ '樞鏽' ],
	'Unusedimages'              => [ '色褪' ],
	'Unusedtemplates'           => [ '墨乾' ],
	'Unwatchedpages'            => [ '無哨頁' ],
	'Upload'                    => [ '進獻' ],
	'UploadStash'               => [ '貢貯' ],
	'Userlogin'                 => [ '登簿' ],
	'Userlogout'                => [ '去簿' ],
	'Userrights'                => [ '秉治權任' ],
	'Version'                   => [ '版' ],
	'Wantedcategories'          => [ '求門' ],
	'Wantedfiles'               => [ '求檔' ],
	'Wantedpages'               => [ '徵頁' ],
	'Wantedtemplates'           => [ '徵模' ],
	'Watchlist'                 => [ '哨站' ],
	'Whatlinkshere'             => [ '取佐' ],
	'Withoutinterwiki'          => [ '孤語' ],
];

/**
 * A list of date format preference keys which can be selected in user
 * preferences. New preference keys can be added, provided they are supported
 * by the language class's timeanddate(). Only the 5 keys listed below are
 * supported by the wikitext converter (DateFormatter.php).
 *
 * The special key "default" is an alias for either dmy or mdy depending on
 * $wgAmericanDates
 */
$datePreferences = [
	'default',
	'ISO 8601',
];

$defaultDateFormat = 'zh';

/**
 * These are formats for dates generated by MediaWiki (as opposed to the wikitext
 * DateFormatter). Documentation for the format string can be found in
 * Language.php, search for sprintfDate.
 *
 * This array is automatically inherited by all subclasses. Individual keys can be
 * overridden.
 */
$dateFormats = [
	'zh time' => 'H時i分',
	'zh date' => 'Y年n月j日 （l）',
	'zh both' => 'Y年n月j日 （D） H時i分',
];

$digitTransformTable = [
	'0' => '〇',
	'1' => '一',
	'2' => '二',
	'3' => '三',
	'4' => '四',
	'5' => '五',
	'6' => '六',
	'7' => '七',
	'8' => '八',
	'9' => '九',
	'.' => '點',
	',' => '',
];

