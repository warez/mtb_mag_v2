<?php get_header("raton"); ?>

<div class="wrapper-background2015" ng-controller="MainUserCtrl as mainCtrl">

    <div class="wrapper">

        <div class="sidebar2015" ng-controller="CategoryController as ctrl">
            <ng-include src="mainCtrl.CONF.WP_SETTINGS.RATON_FE_URL + '/partial/category-view.html'"></ng-include>
        </div>

        <div class="corpo-centrale2015">
            <div ng-view></div>
        </div>

    </div>

</div>

<?php get_footer("raton"); ?>