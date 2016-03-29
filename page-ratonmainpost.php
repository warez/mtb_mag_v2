<?php get_header("raton"); ?>

<div class="wrapper-background2015" ng-controller="MainUserCtrl as mainCtrl">

    <div class="wrapper">

        <div class="sidebar2015" ng-controller="CategoryController as ctrl">

            <div ng-class="{'disabled' : ctrl.mainCtrl.isNotLogged}" class="new-insertion2015" title="Nuovo articolo" ng-click="ctrl.createItem()">
                <i class="fa fa-plus-square" style="margin-right:10px"></i>Nuova articolo
            </div>

            <ng-include src="mainCtrl.CONF.WP_SETTINGS.RATON_FE_URL + '/partial/category-view.html'"></ng-include>
        </div>

        <div class="corpo-centrale2015">
            <div ng-view></div>
        </div>

    </div>

</div>

<?php get_footer("raton"); ?>