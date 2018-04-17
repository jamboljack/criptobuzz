<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title">Dashboard <small>General Statistic</small>
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i><a href="<?=site_url('admin/home');?>"> Dashboard</a>
                </li>
            </ul>
            <div class="page-toolbar">
                <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height grey-salt">
                    <i class="icon-calendar">&nbsp; </i><span class="uppercase visible-lg-inline-block"><?=tgl_indo(date('Y-m-d'));?></span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat blue-madison">
                    <div class="visual">
                        <i class="fa fa-university"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            
                        </div>
                        <div class="desc">
                            Education
                        </div>
                    </div>
                    <a class="more" href="<?=site_url('admin/education');?>">
                    View <i class="m-icon-swapright m-icon-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat red-intense">
                    <div class="visual">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            
                        </div>
                        <div class="desc">
                            Experience
                        </div>
                    </div>
                    <a class="more" href="<?=site_url('admin/experience');?>">
                    View <i class="m-icon-swapright m-icon-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat purple-plum">
                    <div class="visual">
                        <i class="fa fa-asterisk"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            
                        </div>
                        <div class="desc">
                            Skills
                        </div>
                    </div>
                    <a class="more" href="<?=site_url('admin/skill');?>">
                    View <i class="m-icon-swapright m-icon-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat green-haze">
                    <div class="visual">
                        <i class="fa fa-tasks"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            
                        </div>
                        <div class="desc">
                            Works
                        </div>
                    </div>
                    <a class="more" href="<?=site_url('admin/work');?>">
                    View <i class="m-icon-swapright m-icon-white"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>