<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from me.sxs.memberscards/xml/schema/CRM/Memberscards/SxsMembersCards.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:953350485770481afd635dda566898bf)
 */
use CRM_Memberscards_ExtensionUtil as E;

/**
 * Database access object for the SxsMembersCards entity.
 */
class CRM_Memberscards_DAO_SxsMembersCards extends CRM_Core_DAO {
  const EXT = E::LONG_NAME;
  const TABLE_ADDED = '';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_sxs_members_cards';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Unique SxsMembersCards ID
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $id;

  /**
   * Membership ID
   *
   * @var int|string
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $membership_id;

  /**
   * Sequential member card start number.
   *
   * @var int|string
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $start_no;

  /**
   * Sequential member card number.
   *
   * @var int|string
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $card_no;

  /**
   * FK to Contact
   *
   * @var int|string
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $contact_id;

  /**
   * Created timestamp
   *
   * @var string
   *   (SQL type: timestamp)
   *   Note that values will be retrieved from the database as a string.
   */
  public $created;

  /**
   * Modified timestamp
   *
   * @var string
   *   (SQL type: timestamp)
   *   Note that values will be retrieved from the database as a string.
   */
  public $modified;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_sxs_members_cards';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? E::ts('Sxs Members Cardses') : E::ts('Sxs Members Cards');
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('ID'),
          'description' => E::ts('Unique SxsMembersCards ID'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sxs_members_cards.id',
          'table_name' => 'civicrm_sxs_members_cards',
          'entity' => 'SxsMembersCards',
          'bao' => 'CRM_Memberscards_DAO_SxsMembersCards',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => NULL,
        ],
        'membership_id' => [
          'name' => 'membership_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Membership ID'),
          'description' => E::ts('Membership ID'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sxs_members_cards.membership_id',
          'table_name' => 'civicrm_sxs_members_cards',
          'entity' => 'SxsMembersCards',
          'bao' => 'CRM_Memberscards_DAO_SxsMembersCards',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'add' => NULL,
        ],
        'start_no' => [
          'name' => 'start_no',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Start No'),
          'description' => E::ts('Sequential member card start number.'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sxs_members_cards.start_no',
          'default' => '2999',
          'table_name' => 'civicrm_sxs_members_cards',
          'entity' => 'SxsMembersCards',
          'bao' => 'CRM_Memberscards_DAO_SxsMembersCards',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'add' => NULL,
        ],
        'card_no' => [
          'name' => 'card_no',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Card No'),
          'description' => E::ts('Sequential member card number.'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sxs_members_cards.card_no',
          'default' => '0',
          'table_name' => 'civicrm_sxs_members_cards',
          'entity' => 'SxsMembersCards',
          'bao' => 'CRM_Memberscards_DAO_SxsMembersCards',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'add' => NULL,
        ],
        'contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Contact ID'),
          'description' => E::ts('FK to Contact'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sxs_members_cards.contact_id',
          'table_name' => 'civicrm_sxs_members_cards',
          'entity' => 'SxsMembersCards',
          'bao' => 'CRM_Memberscards_DAO_SxsMembersCards',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'html' => [
            'type' => 'Number',
          ],
          'add' => NULL,
        ],
        'created' => [
          'name' => 'created',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => E::ts('Created'),
          'description' => E::ts('Created timestamp'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sxs_members_cards.created',
          'default' => 'current_timestamp()',
          'table_name' => 'civicrm_sxs_members_cards',
          'entity' => 'SxsMembersCards',
          'bao' => 'CRM_Memberscards_DAO_SxsMembersCards',
          'localizable' => 0,
          'add' => NULL,
        ],
        'modified' => [
          'name' => 'modified',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => E::ts('Modified'),
          'description' => E::ts('Modified timestamp'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sxs_members_cards.modified',
          'default' => 'current_timestamp()',
          'table_name' => 'civicrm_sxs_members_cards',
          'entity' => 'SxsMembersCards',
          'bao' => 'CRM_Memberscards_DAO_SxsMembersCards',
          'localizable' => 0,
          'add' => NULL,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'sxs_members_cards', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'sxs_members_cards', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
