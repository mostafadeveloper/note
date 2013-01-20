--
-- Table structure for table `notes`
-- DB NAME: mzssystems 
--

CREATE TABLE `notes` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(128) collate utf8_unicode_ci NOT NULL default '',
  `note` varchar(60) collate utf8_unicode_ci NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` VALUES(1, 'title1', 'this is note content1');
INSERT INTO `notes` VALUES(2, 'title2', 'this is note content2');