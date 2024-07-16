(function(angular, $, _) {

  angular.module('crmMemberscards').config(function($routeProvider) {
      $routeProvider.when('/memberships/cards', {
        controller: 'CrmMemberscardsEditCtrlr',
        controllerAs: '$ctrl',
        templateUrl: '~/crmMemberscards/EditCtrlr.html',

        // If you need to look up data when opening the page, list it out
        // under "resolve".
        resolve: {
          myContact: function(crmApi, $route) {
            return crmApi('Contact', 'getsingle', {
              id: 'user_contact_id',
              instance_id: $route.current.params.id,
              return: ['first_name', 'last_name']
            });
          }
        }
      });
    }
  );

  var ModalDemoCtrl = function ($scope, $modal, $log) {

    $scope.items = ['item1', 'item2', 'item3'];
  
    $scope.open = function () {
  
      var modalInstance = $modal.open({
        templateUrl: 'some-dynamic.php',
        controller: ModalInstanceCtrl,
        resolve: {
          items: function () {
            return $scope.items;
          }
        }
      });
  
      modalInstance.result.then(function (selectedItem) {
        $scope.selected = selectedItem;
      }, function () {
        $log.info('Modal dismissed at: ' + new Date());
      });
    };
  };

  // The controller uses *injection*. This default injects a few things:
  //   $scope -- This is the set of variables shared between JS and HTML.
  //   crmApi, crmStatus, crmUiHelp -- These are services provided by civicrm-core.
  //   myContact -- The current contact, defined above in config().
  angular.module('crmMemberscards').controller('CrmMemberscardsEditCtrlr', function($scope, crmApi, crmStatus, crmUiHelp, myContact) {
    // The ts() and hs() functions help load strings for this module.
    var ts = $scope.ts = CRM.ts('me.sxs.memberscards');
    var hs = $scope.hs = crmUiHelp({file: 'CRM/crmMemberscards/EditCtrlr'}); // See: templates/CRM/crmMemberscards/EditCtrlr.hlp
    // Local variable for this controller (needed when inside a callback fn where `this` is not available).
    var ctrl = this;

    // We have myContact available in JS. We also want to reference it in HTML.
    this.myContact = myContact;

    this.save = function() {
      return crmStatus(
        // Status messages. For defaults, just use "{}"
        {start: ts('Saving...'), success: ts('Saved')},
        // The save action. Note that crmApi() returns a promise.
        crmApi('Contact', 'create', {
          id: ctrl.myContact.id,
          first_name: ctrl.myContact.first_name,
          last_name: ctrl.myContact.last_name
        })
      );
    };
  });

})(angular, CRM.$, CRM._);
