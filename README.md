php與Framework實作簡介
====================

<pre>
DB:demo
Table:news

--
-- 資料表格式： `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `pubDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
</pre>


<p>這裡沒有開git branch了，直接clone就是那天講解時的四個目錄</p>
<p>若要自已弄個環境跑看看，有些地方連結路徑有問題的，請自行修改囉。</p>


