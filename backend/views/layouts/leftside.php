<?php

use adminlte\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
<?= Html::img('../web/img/ironman.jpg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
            </div>
            <div class="pull-left info">
                <p style="text-transform: capitalize;"><?= Yii::$app->user->identity->username; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </br>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?=
        Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Menu', 'options' => ['class' => 'header']],
                        ['label' => 'Cars', 'icon' => 'fa fa-truck', 
                            'url' => '?r=car', 'active' => $this->context->route == 'site/index'
                        ],
                        ['label' => 'Bill','icon'=>'fa fa-money',
                            'url' => '?r=bill', 'active' => $this->context->route == 'site/index'],
                        [
                            'label' => 'Database',
                            'icon' => 'fa fa-database',
                            'url' => '#',
                            'items' => [
                                [
                                    'label' => 'ตัวแทน',
                                    'icon' => 'fa fa-database',
                                    'url' => '?r=agent',
				    'active' => $this->context->route == 'master1/index'
                                ],
                                [
                                    'label' => 'ผู้ถือกรรมสิทธิ์',
                                    'icon' => 'fa fa-database',
                                    'url' => '?r=ownership',
				    'active' => $this->context->route == 'master2/index'
                                ],
                                [
                                    'label' => 'ผู้เช่าซื้อ',
                                    'icon' => 'fa fa-database',
                                    'url' => '?r=lease',
				    'active' => $this->context->route == 'master2/index'
                                ],
                                [
                                    'label' => 'ประเภทรถ',
                                    'icon' => 'fa fa-database',
                                    'url' => '?r=category',
				    'active' => $this->context->route == 'master2/index'
                                ],
                                [
                                    'label' => 'ยี่ห้อรถ',
                                    'icon' => 'fa fa-database',
                                    'url' => '?r=brand',
				    'active' => $this->context->route == 'master2/index'
                                ],
                                [
                                    'label' => 'ประกอบการ',
                                    'icon' => 'fa fa-database',
                                    'url' => '?r=operator',
				    'active' => $this->context->route == 'master2/index'
                                ],
                                [
                                    'label' => 'สถานะ',
                                    'icon' => 'fa fa-database',
                                    'url' => '?r=status',
				    'active' => $this->context->route == 'master2/index'
                                ]
                            ]
                        ],
                        //['label' => 'Users','icon' => 'fa fa-users','url' => ['/user'],'active' => $this->context->route == 'user/index',],
                        //['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                        //['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                    ],
                ]
        )
        ?>
        
    </section>
    <!-- /.sidebar -->
</aside>
