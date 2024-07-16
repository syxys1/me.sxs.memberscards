<?php
// This file declares an Angular module which can be autoloaded
// in CiviCRM. See also:
// \https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules/n
return [
  'js' => [
    'ang/crmMemberscards.js',
    'ang/crmMemberscards/*.js',
    'ang/crmMemberscards/*/*.js',
  ],
  'css' => [
    'ang/crmMemberscards.css',
  ],
  'partials' => [
    'ang/crmMemberscards',
  ],
  'requires' => [
    'crmUi',
    'crmUtil',
    'ngRoute',
  ],
  'settings' => [],
];
