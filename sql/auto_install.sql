-- +--------------------------------------------------------------------+
-- | Copyright CiviCRM LLC. All rights reserved.                        |
-- |                                                                    |
-- | This work is published under the GNU AGPLv3 license with some      |
-- | permitted exceptions and without any warranty. For full license    |
-- | and copyright information, see https://civicrm.org/licensing       |
-- +--------------------------------------------------------------------+
--
-- Generated from schema.tpl
-- DO NOT EDIT.  Generated by CRM_Core_CodeGen
--
-- /*******************************************************
-- *
-- * Clean up the existing tables - this section generated from drop.tpl
-- *
-- *******************************************************/

SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `civicrm_sxs_members_cards`;

SET FOREIGN_KEY_CHECKS=1;
-- /*******************************************************
-- *
-- * Create new tables
-- *
-- *******************************************************/

-- /*******************************************************
-- *
-- * civicrm_sxs_members_cards
-- *
-- * FIXME
-- *
-- *******************************************************/
CREATE TABLE `civicrm_sxs_members_cards` (
  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique SxsMembersCards ID',
  `membership_id` int unsigned NOT NULL COMMENT 'Membership ID',
  `start_no` int unsigned NOT NULL DEFAULT 2999 COMMENT 'Sequential member card start number.',
  `card_no` int unsigned NOT NULL DEFAULT 0 COMMENT 'Sequential member card number.',
  `contact_id` int unsigned NOT NULL COMMENT 'FK to Contact',
  `created` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Created timestamp',
  `modified` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Modified timestamp',
  PRIMARY KEY (`id`),
  CONSTRAINT FK_civicrm_sxs_members_cards_contact_id FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact`(`id`) ON DELETE CASCADE
)
ENGINE=InnoDB;