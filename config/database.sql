-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

--
-- Table `tl_iso_payment_modules`
--

CREATE TABLE `tl_iso_payment_modules` (
  `sofortueberweisung_user_id` varchar(16) NOT NULL default '',
  `sofortueberweisung_project_id` varchar(16) NOT NULL default '',
  `sofortueberweisung_project_password` varchar(255) NOT NULL default '',
  `sofortueberweisung_notification_password` varchar(255) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

