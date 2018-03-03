<?php
use common\models\User;
?>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="circle-tile ">
                <a href="#">
                    <div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div>
                </a>
                <div class="circle-tile-content dark-blue">
                    <div class="circle-tile-description text-faded"> Total Users</div>
                    <div class="circle-tile-number text-faded "><?=User::getCounts('all')?></div>
                    <a class="circle-tile-footer" href="#">More Info <i class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="circle-tile ">
                <a href="#"><div class="circle-tile-heading dark-gray"><i class="fa fa-user fa-fw fa-3x"></i></div></a>
                <div class="circle-tile-content dark-gray">
                    <div class="circle-tile-description text-faded"> Total Admin </div>
                    <div class="circle-tile-number text-faded "><?=User::getCounts('admins')?></div>
                    <a class="circle-tile-footer" href="#">More Info <i class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div> 
        <div class="col-lg-3 col-sm-6">
            <div class="circle-tile ">
                <a href="#"><div class="circle-tile-heading red"><i class="fa fa-wheelchair fa-fw fa-3x"></i></div></a>
                <div class="circle-tile-content red">
                    <div class="circle-tile-description text-faded"> Total Patients </div>
                    <div class="circle-tile-number text-faded "><?=User::getCounts('patients')?></div>
                    <a class="circle-tile-footer" href="#">More Info <i class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="circle-tile ">
                <a href="#"><div class="circle-tile-heading orange"><i class="fa fa-user-md fa-fw fa-3x"></i></div></a>
                <div class="circle-tile-content orange">
                    <div class="circle-tile-description text-faded"> Total Doctors </div>
                    <div class="circle-tile-number text-faded "><?=User::getCounts('doctors')?></div>
                    <a class="circle-tile-footer" href="#">More Info <i class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div> 
</div>  