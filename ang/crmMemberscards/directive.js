(function(angular, $, _) {
  // "crmMemberscardsDirective" is a basic skeletal directive.
  // Example usage: <div crm-memberscards-directive="{foo: 1, bar: 2}"></div>
  angular.module('crmMemberscards').directive('crmMemberscardsDirective', function() {
    return {
      restrict: 'AE',
      templateUrl: '~/crmMemberscards/Directive.html',
      scope: {
        crmMemberscardsDirective: '='
      },
      link: function($scope, $el, $attr) {
        var ts = $scope.ts = CRM.ts('me.sxs.memberscards');
        $scope.$watch('crmMemberscardsDirective', function(newValue){
          $scope.myOptions = newValue;
        });
      }
    };
  });
})(angular, CRM.$, CRM._);
