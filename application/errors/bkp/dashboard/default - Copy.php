<? $this->load->view(''.$this->session->userdata('SCL_SSS_TIPO').'/dashboard/header'); ?>
<div class="main-container" id="main-container"> 
  <script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>
  <div class="main-container-inner"> <a class="menu-toggler" id="menu-toggler" href="http://192.69.216.111/themes/preview/ace/index.html#"> <span class="menu-text"></span> </a>
    <div class="sidebar sidebar-fixed" id="sidebar"> 
      <script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>
      <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
          <button class="btn btn-success"> <i class="icon-signal"></i> </button>
          <button class="btn btn-info"> <i class="icon-pencil"></i> </button>
          <button class="btn btn-warning"> <i class="icon-group"></i> </button>
          <button class="btn btn-danger"> <i class="icon-cogs"></i> </button>
        </div>
        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini"> <span class="btn btn-success"></span> <span class="btn btn-info"></span> <span class="btn btn-warning"></span> <span class="btn btn-danger"></span> </div>
      </div>
      <!-- #sidebar-shortcuts -->
      
      <ul class="nav nav-list">
        <li class="active"> <a href="tema/dash.htm"> <i class="icon-dashboard"></i> <span class="menu-text"> Dashboard </span> </a> </li>
        <li> <a href="http://192.69.216.111/themes/preview/ace/typography.html"> <i class="icon-text-width"></i> <span class="menu-text"> Typography </span> </a> </li>
        <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="dropdown-toggle"> <i class="icon-desktop"></i> <span class="menu-text"> UI Elements </span> <b class="arrow icon-angle-down"></b> </a>
          <ul class="submenu">
            <li> <a href="http://192.69.216.111/themes/preview/ace/elements.html"> <i class="icon-double-angle-right"></i> Elements </a> </li>
            <li> <a href="http://192.69.216.111/themes/preview/ace/buttons.html"> <i class="icon-double-angle-right"></i> Buttons &amp; Icons </a> </li>
            <li> <a href="http://192.69.216.111/themes/preview/ace/treeview.html"> <i class="icon-double-angle-right"></i> Treeview </a> </li>
            <li> <a href="http://192.69.216.111/themes/preview/ace/jquery-ui.html"> <i class="icon-double-angle-right"></i> jQuery UI </a> </li>
            <li> <a href="http://192.69.216.111/themes/preview/ace/nestable-list.html"> <i class="icon-double-angle-right"></i> Nestable Lists </a> </li>
            <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="dropdown-toggle"> <i class="icon-double-angle-right"></i> Three Level Menu <b class="arrow icon-angle-down"></b> </a>
              <ul class="submenu">
                <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#"> <i class="icon-leaf"></i> Item #1 </a> </li>
                <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="dropdown-toggle"> <i class="icon-pencil"></i> 4th level <b class="arrow icon-angle-down"></b> </a>
                  <ul class="submenu">
                    <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#"> <i class="icon-plus"></i> Add Product </a> </li>
                    <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#"> <i class="icon-eye-open"></i> View Products </a> </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="dropdown-toggle"> <i class="icon-list"></i> <span class="menu-text"> Tables </span> <b class="arrow icon-angle-down"></b> </a>
          <ul class="submenu">
            <li> <a href="http://192.69.216.111/themes/preview/ace/tables.html"> <i class="icon-double-angle-right"></i> Simple &amp; Dynamic </a> </li>
            <li> <a href="http://192.69.216.111/themes/preview/ace/jqgrid.html"> <i class="icon-double-angle-right"></i> jqGrid plugin </a> </li>
          </ul>
        </li>
        <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="dropdown-toggle"> <i class="icon-edit"></i> <span class="menu-text"> Forms </span> <b class="arrow icon-angle-down"></b> </a>
          <ul class="submenu">
            <li> <a href="http://192.69.216.111/themes/preview/ace/form-elements.html"> <i class="icon-double-angle-right"></i> Form Elements </a> </li>
            <li> <a href="http://192.69.216.111/themes/preview/ace/form-wizard.html"> <i class="icon-double-angle-right"></i> Wizard &amp; Validation </a> </li>
            <li> <a href="http://192.69.216.111/themes/preview/ace/wysiwyg.html"> <i class="icon-double-angle-right"></i> Wysiwyg &amp; Markdown </a> </li>
            <li> <a href="http://192.69.216.111/themes/preview/ace/dropzone.html"> <i class="icon-double-angle-right"></i> Dropzone File Upload </a> </li>
          </ul>
        </li>
        <li> <a href="http://192.69.216.111/themes/preview/ace/widgets.html"> <i class="icon-list-alt"></i> <span class="menu-text"> Widgets </span> </a> </li>
        <li> <a href="http://192.69.216.111/themes/preview/ace/calendar.html"> <i class="icon-calendar"></i> <span class="menu-text"> Calendar <span class="badge badge-transparent tooltip-error" title="" data-original-title="2??Important??Events"> <i class="icon-warning-sign red bigger-130"></i> </span> </span> </a> </li>
        <li> <a href="http://192.69.216.111/themes/preview/ace/gallery.html"> <i class="icon-picture"></i> <span class="menu-text"> Gallery </span> </a> </li>
        <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="dropdown-toggle"> <i class="icon-tag"></i> <span class="menu-text"> More Pages </span> <b class="arrow icon-angle-down"></b> </a>
          <ul class="submenu">
            <li> <a href="http://192.69.216.111/themes/preview/ace/profile.html"> <i class="icon-double-angle-right"></i> User Profile </a> </li>
            <li> <a href="http://192.69.216.111/themes/preview/ace/inbox.html"> <i class="icon-double-angle-right"></i> Inbox </a> </li>
            <li> <a href="http://192.69.216.111/themes/preview/ace/pricing.html"> <i class="icon-double-angle-right"></i> Pricing Tables </a> </li>
            <li> <a href="http://192.69.216.111/themes/preview/ace/invoice.html"> <i class="icon-double-angle-right"></i> Invoice </a> </li>
            <li> <a href="http://192.69.216.111/themes/preview/ace/timeline.html"> <i class="icon-double-angle-right"></i> Timeline </a> </li>
            <li> <a href="http://192.69.216.111/themes/preview/ace/login.html"> <i class="icon-double-angle-right"></i> Login &amp; Register </a> </li>
          </ul>
        </li>
        <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="dropdown-toggle"> <i class="icon-file-alt"></i> <span class="menu-text"> Other Pages <span class="badge badge-primary ">5</span> </span> <b class="arrow icon-angle-down"></b> </a>
          <ul class="submenu">
            <li> <a href="http://192.69.216.111/themes/preview/ace/faq.html"> <i class="icon-double-angle-right"></i> FAQ </a> </li>
            <li> <a href="http://192.69.216.111/themes/preview/ace/error-404.html"> <i class="icon-double-angle-right"></i> Error 404 </a> </li>
            <li> <a href="http://192.69.216.111/themes/preview/ace/error-500.html"> <i class="icon-double-angle-right"></i> Error 500 </a> </li>
            <li> <a href="http://192.69.216.111/themes/preview/ace/grid.html"> <i class="icon-double-angle-right"></i> Grid </a> </li>
            <li> <a href="http://192.69.216.111/themes/preview/ace/blank.html"> <i class="icon-double-angle-right"></i> Blank Page </a> </li>
          </ul>
        </li>
      </ul>
      <!-- /.nav-list -->
      
      <div class="sidebar-collapse" id="sidebar-collapse"> <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i> </div>
      <script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script> 
    </div>
    <div class="main-content">
      <div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs"> 
        <script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>
        <ul class="breadcrumb">
          <li> <i class="icon-home home-icon"></i> <a href="http://192.69.216.111/themes/preview/ace/index.html#">Home</a> </li>
          <li class="active">Dashboard</li>
        </ul>
        <!-- .breadcrumb -->
        
        <div class="nav-search" id="nav-search">
          <form class="form-search">
            <span class="input-icon">
            <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off">
            <i class="icon-search nav-search-icon"></i> </span>
          </form>
        </div>
        <!-- #nav-search --> 
      </div>
      <div class="page-content">
        <div class="page-header">
          <h1> Dashboard <small> <i class="icon-double-angle-right"></i> overview &amp; stats </small> </h1>
        </div>
        <!-- /.page-header -->
        
        <div class="row">
          <div class="col-xs-12"> 
            <!-- PAGE CONTENT BEGINS -->
            
            <div class="alert alert-block alert-success">
              <button type="button" class="close" data-dismiss="alert"> <i class="icon-remove"></i> </button>
              <i class="icon-ok green"></i> Welcome to <strong class="green"> Ace <small>(v1.2)</small> </strong> ,
              the lightweight, feature-rich and easy to use admin template. </div>
            <div class="row">
              <div class="space-6"></div>
              <div class="col-sm-7 infobox-container">
                <div class="infobox infobox-green  ">
                  <div class="infobox-icon"> <i class="icon-comments"></i> </div>
                  <div class="infobox-data"> <span class="infobox-data-number">32</span>
                    <div class="infobox-content">comments + 2 reviews</div>
                  </div>
                  <div class="stat stat-success">8%</div>
                </div>
                <div class="infobox infobox-blue  ">
                  <div class="infobox-icon"> <i class="icon-twitter"></i> </div>
                  <div class="infobox-data"> <span class="infobox-data-number">11</span>
                    <div class="infobox-content">new followers</div>
                  </div>
                  <div class="badge badge-success"> +32% <i class="icon-arrow-up"></i> </div>
                </div>
                <div class="infobox infobox-pink  ">
                  <div class="infobox-icon"> <i class="icon-shopping-cart"></i> </div>
                  <div class="infobox-data"> <span class="infobox-data-number">8</span>
                    <div class="infobox-content">new orders</div>
                  </div>
                  <div class="stat stat-important">4%</div>
                </div>
                <div class="infobox infobox-red  ">
                  <div class="infobox-icon"> <i class="icon-beaker"></i> </div>
                  <div class="infobox-data"> <span class="infobox-data-number">7</span>
                    <div class="infobox-content">experiments</div>
                  </div>
                </div>
                <div class="infobox infobox-orange2  ">
                  <div class="infobox-chart"> <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224">
                    <canvas width="44" height="33" style="display: inline-block; width: 44px; height: 33px; vertical-align: top;"></canvas>
                    </span> </div>
                  <div class="infobox-data"> <span class="infobox-data-number">6,251</span>
                    <div class="infobox-content">pageviews</div>
                  </div>
                  <div class="badge badge-success"> 7.2% <i class="icon-arrow-up"></i> </div>
                </div>
                <div class="infobox infobox-blue2  ">
                  <div class="infobox-progress">
                    <div class="easy-pie-chart percentage easyPieChart" data-percent="42" data-size="46" style="width: 46px; height: 46px; line-height: 46px;"> <span class="percent">42</span>%
                      <canvas width="46" height="46"></canvas>
                    </div>
                  </div>
                  <div class="infobox-data"> <span class="infobox-text">traffic used</span>
                    <div class="infobox-content"> <span class="bigger-110">~</span> 58GB remaining </div>
                  </div>
                </div>
                <div class="space-6"></div>
                <div class="infobox infobox-green infobox-small infobox-dark">
                  <div class="infobox-progress">
                    <div class="easy-pie-chart percentage easyPieChart" data-percent="61" data-size="39" style="width: 39px; height: 39px; line-height: 39px;"> <span class="percent">61</span>%
                      <canvas width="39" height="39"></canvas>
                    </div>
                  </div>
                  <div class="infobox-data">
                    <div class="infobox-content">Task</div>
                    <div class="infobox-content">Completion</div>
                  </div>
                </div>
                <div class="infobox infobox-blue infobox-small infobox-dark">
                  <div class="infobox-chart"> <span class="sparkline" data-values="3,4,2,3,4,4,2,2">
                    <canvas width="39" height="19" style="display: inline-block; width: 39px; height: 19px; vertical-align: top;"></canvas>
                    </span> </div>
                  <div class="infobox-data">
                    <div class="infobox-content">Earnings</div>
                    <div class="infobox-content">$32,000</div>
                  </div>
                </div>
                <div class="infobox infobox-grey infobox-small infobox-dark">
                  <div class="infobox-icon"> <i class="icon-download-alt"></i> </div>
                  <div class="infobox-data">
                    <div class="infobox-content">Downloads</div>
                    <div class="infobox-content">1,205</div>
                  </div>
                </div>
              </div>
              <div class="vspace-sm"></div>
              <div class="col-sm-5">
                <div class="widget-box">
                  <div class="widget-header widget-header-flat widget-header-small">
                    <h5> <i class="icon-signal"></i> Traffic Sources </h5>
                    <div class="widget-toolbar no-border">
                      <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown"> This Week <i class="icon-angle-down icon-on-right bigger-110"></i> </button>
                      <ul class="dropdown-menu pull-right dropdown-125 dropdown-lighter dropdown-caret">
                        <li class="active"> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="blue"> <i class="icon-caret-right bigger-110">&nbsp;</i> This Week </a> </li>
                        <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#"> <i class="icon-caret-right bigger-110 invisible">&nbsp;</i> Last Week </a> </li>
                        <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#"> <i class="icon-caret-right bigger-110 invisible">&nbsp;</i> This Month </a> </li>
                        <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#"> <i class="icon-caret-right bigger-110 invisible">&nbsp;</i> Last Month </a> </li>
                      </ul>
                    </div>
                  </div>
                  <div class="widget-body">
                    <div class="widget-main">
                      <div id="piechart-placeholder" style="width: 90%; min-height: 150px; padding: 0px; position: relative;">
                        <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 384px; height: 150px;" width="384" height="150"></canvas>
                        <canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 384px; height: 150px;" width="384" height="150"></canvas>
                        <div class="legend">
                          <div style="position: absolute; width: 95px; height: 110px; top: 15px; right: -30px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div>
                          <table style="position:absolute;top:15px;right:-30px;;font-size:smaller;color:#545454">
                            <tbody>
                              <tr>
                                <td class="legendColorBox"><div style="border:1px solid null;padding:1px">
                                    <div style="width:4px;height:0;border:5px solid #68BC31;overflow:hidden"></div>
                                  </div></td>
                                <td class="legendLabel">social networks</td>
                              </tr>
                              <tr>
                                <td class="legendColorBox"><div style="border:1px solid null;padding:1px">
                                    <div style="width:4px;height:0;border:5px solid #2091CF;overflow:hidden"></div>
                                  </div></td>
                                <td class="legendLabel">search engines</td>
                              </tr>
                              <tr>
                                <td class="legendColorBox"><div style="border:1px solid null;padding:1px">
                                    <div style="width:4px;height:0;border:5px solid #AF4E96;overflow:hidden"></div>
                                  </div></td>
                                <td class="legendLabel">ad campaigns</td>
                              </tr>
                              <tr>
                                <td class="legendColorBox"><div style="border:1px solid null;padding:1px">
                                    <div style="width:4px;height:0;border:5px solid #DA5430;overflow:hidden"></div>
                                  </div></td>
                                <td class="legendLabel">direct traffic</td>
                              </tr>
                              <tr>
                                <td class="legendColorBox"><div style="border:1px solid null;padding:1px">
                                    <div style="width:4px;height:0;border:5px solid #FEE074;overflow:hidden"></div>
                                  </div></td>
                                <td class="legendLabel">other</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="hr hr8 hr-double"></div>
                      <div class="clearfix">
                        <div class="grid3"> <span class="grey"> <i class="icon-facebook-sign icon-2x blue"></i> &nbsp; likes </span>
                          <h4 class="bigger pull-right">1,255</h4>
                        </div>
                        <div class="grid3"> <span class="grey"> <i class="icon-twitter-sign icon-2x purple"></i> &nbsp; tweets </span>
                          <h4 class="bigger pull-right">941</h4>
                        </div>
                        <div class="grid3"> <span class="grey"> <i class="icon-pinterest-sign icon-2x red"></i> &nbsp; pins </span>
                          <h4 class="bigger pull-right">1,050</h4>
                        </div>
                      </div>
                    </div>
                    <!-- /widget-main --> 
                  </div>
                  <!-- /widget-body --> 
                </div>
                <!-- /widget-box --> 
              </div>
              <!-- /span --> 
            </div>
            <!-- /row -->
            
            <div class="hr hr32 hr-dotted"></div>
            <div class="row">
              <div class="col-sm-5">
                <div class="widget-box transparent">
                  <div class="widget-header widget-header-flat">
                    <h4 class="lighter"> <i class="icon-star orange"></i> Popular Domains </h4>
                    <div class="widget-toolbar"> <a href="http://192.69.216.111/themes/preview/ace/index.html#" data-action="collapse"> <i class="icon-chevron-up"></i> </a> </div>
                  </div>
                  <div class="widget-body">
                    <div class="widget-main no-padding">
                      <table class="table table-bordered table-striped">
                        <thead class="thin-border-bottom">
                          <tr>
                            <th> <i class="icon-caret-right blue"></i> name </th>
                            <th> <i class="icon-caret-right blue"></i> price </th>
                            <th class="hidden-480"> <i class="icon-caret-right blue"></i> status </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>internet.com</td>
                            <td><small> <s class="red">$29.99</s> </small> <b class="green">$19.99</b></td>
                            <td class="hidden-480"><span class="label label-info arrowed-right arrowed-in">on sale</span></td>
                          </tr>
                          <tr>
                            <td>online.com</td>
                            <td><small> <s class="red"></s> </small> <b class="green">$16.45</b></td>
                            <td class="hidden-480"><span class="label label-success arrowed-in arrowed-in-right">approved</span></td>
                          </tr>
                          <tr>
                            <td>newnet.com</td>
                            <td><small> <s class="red"></s> </small> <b class="green">$15.00</b></td>
                            <td class="hidden-480"><span class="label label-danger arrowed">pending</span></td>
                          </tr>
                          <tr>
                            <td>web.com</td>
                            <td><small> <s class="red">$24.99</s> </small> <b class="green">$19.95</b></td>
                            <td class="hidden-480"><span class="label arrowed"> <s>out of stock</s> </span></td>
                          </tr>
                          <tr>
                            <td>domain.com</td>
                            <td><small> <s class="red"></s> </small> <b class="green">$12.00</b></td>
                            <td class="hidden-480"><span class="label label-warning arrowed arrowed-right">SOLD</span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- /widget-main --> 
                  </div>
                  <!-- /widget-body --> 
                </div>
                <!-- /widget-box --> 
              </div>
              <div class="col-sm-7">
                <div class="widget-box transparent">
                  <div class="widget-header widget-header-flat">
                    <h4 class="lighter"> <i class="icon-signal"></i> Sale Stats </h4>
                    <div class="widget-toolbar"> <a href="http://192.69.216.111/themes/preview/ace/index.html#" data-action="collapse"> <i class="icon-chevron-up"></i> </a> </div>
                  </div>
                  <div class="widget-body">
                    <div class="widget-main padding-4">
                      <div id="sales-charts" style="width: 100%; height: 220px; padding: 0px; position: relative;">
                        <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 635px; height: 220px;" width="635" height="220"></canvas>
                        <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                          <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 79px; top: 203px; left: 30px; text-align: center;">0.0</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 79px; top: 203px; left: 125px; text-align: center;">1.0</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 79px; top: 203px; left: 220px; text-align: center;">2.0</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 79px; top: 203px; left: 315px; text-align: center;">3.0</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 79px; top: 203px; left: 410px; text-align: center;">4.0</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 79px; top: 203px; left: 505px; text-align: center;">5.0</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 79px; top: 203px; left: 600px; text-align: center;">6.0</div>
                          </div>
                          <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 190px; left: 1px; text-align: right;">-2.000</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 166px; left: 1px; text-align: right;">-1.500</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 143px; left: 1px; text-align: right;">-1.000</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 119px; left: 1px; text-align: right;">-0.500</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 95px; left: 5px; text-align: right;">0.000</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 71px; left: 5px; text-align: right;">0.500</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 48px; left: 5px; text-align: right;">1.000</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 24px; left: 5px; text-align: right;">1.500</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 5px; text-align: right;">2.000</div>
                          </div>
                        </div>
                        <canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 635px; height: 220px;" width="635" height="220"></canvas>
                        <div class="legend">
                          <div style="position: absolute; width: 64px; height: 66px; top: 13px; right: 13px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div>
                          <table style="position:absolute;top:13px;right:13px;;font-size:smaller;color:#545454">
                            <tbody>
                              <tr>
                                <td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px">
                                    <div style="width:4px;height:0;border:5px solid rgb(237,194,64);overflow:hidden"></div>
                                  </div></td>
                                <td class="legendLabel">Domains</td>
                              </tr>
                              <tr>
                                <td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px">
                                    <div style="width:4px;height:0;border:5px solid rgb(175,216,248);overflow:hidden"></div>
                                  </div></td>
                                <td class="legendLabel">Hosting</td>
                              </tr>
                              <tr>
                                <td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px">
                                    <div style="width:4px;height:0;border:5px solid rgb(203,75,75);overflow:hidden"></div>
                                  </div></td>
                                <td class="legendLabel">Services</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <!-- /widget-main --> 
                  </div>
                  <!-- /widget-body --> 
                </div>
                <!-- /widget-box --> 
              </div>
            </div>
            <div class="hr hr32 hr-dotted"></div>
            <div class="row">
              <div class="col-sm-6">
                <div class="widget-box transparent" id="recent-box">
                  <div class="widget-header">
                    <h4 class="lighter smaller"> <i class="icon-rss orange"></i> RECENT </h4>
                    <div class="widget-toolbar no-border">
                      <ul class="nav nav-tabs" id="recent-tab">
                        <li class="active"> <a data-toggle="tab" href="http://192.69.216.111/themes/preview/ace/index.html#task-tab">Tasks</a> </li>
                        <li> <a data-toggle="tab" href="http://192.69.216.111/themes/preview/ace/index.html#member-tab">Members</a> </li>
                        <li> <a data-toggle="tab" href="http://192.69.216.111/themes/preview/ace/index.html#comment-tab">Comments</a> </li>
                      </ul>
                    </div>
                  </div>
                  <div class="widget-body">
                    <div class="widget-main padding-4">
                      <div class="tab-content padding-8 overflow-visible">
                        <div id="task-tab" class="tab-pane active">
                          <h4 class="smaller lighter green"> <i class="icon-list"></i> Sortable Lists </h4>
                          <ul id="tasks" class="item-list ui-sortable">
                            <li class="item-orange clearfix">
                              <label class="inline">
                                <input type="checkbox" class="ace">
                                <span class="lbl"> Answering customer questions</span> </label>
                              <div class="pull-right easy-pie-chart percentage easyPieChart" data-size="30" data-color="#ECCB71" data-percent="42" style="width: 30px; height: 30px; line-height: 30px;"> <span class="percent">42</span>%
                                <canvas width="30" height="30"></canvas>
                              </div>
                            </li>
                            <li class="item-red clearfix">
                              <label class="inline">
                                <input type="checkbox" class="ace">
                                <span class="lbl"> Fixing bugs</span> </label>
                              <div class="pull-right action-buttons"> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="blue"> <i class="icon-pencil bigger-130"></i> </a> <span class="vbar"></span> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="red"> <i class="icon-trash bigger-130"></i> </a> <span class="vbar"></span> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="green"> <i class="icon-flag bigger-130"></i> </a> </div>
                            </li>
                            <li class="item-default clearfix">
                              <label class="inline">
                                <input type="checkbox" class="ace">
                                <span class="lbl"> Adding new features</span> </label>
                              <div class="inline pull-right position-relative dropdown-hover">
                                <button class="btn btn-minier bigger btn-primary"> <i class="icon-cog icon-only bigger-120"></i> </button>
                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close pull-right">
                                  <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Mark??as??done"> <span class="green"> <i class="icon-ok bigger-110"></i> </span> </a> </li>
                                  <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete"> <span class="red"> <i class="icon-trash bigger-110"></i> </span> </a> </li>
                                </ul>
                              </div>
                            </li>
                            <li class="item-blue clearfix">
                              <label class="inline">
                                <input type="checkbox" class="ace">
                                <span class="lbl"> Upgrading scripts used in template</span> </label>
                            </li>
                            <li class="item-grey clearfix">
                              <label class="inline">
                                <input type="checkbox" class="ace">
                                <span class="lbl"> Adding new skins</span> </label>
                            </li>
                            <li class="item-green clearfix">
                              <label class="inline">
                                <input type="checkbox" class="ace">
                                <span class="lbl"> Updating server software up</span> </label>
                            </li>
                            <li class="item-pink clearfix">
                              <label class="inline">
                                <input type="checkbox" class="ace">
                                <span class="lbl"> Cleaning up</span> </label>
                            </li>
                          </ul>
                        </div>
                        <div id="member-tab" class="tab-pane">
                          <div class="clearfix">
                            <div class="itemdiv memberdiv">
                              <div class="user"> <img alt="Bob Doe&#39;s avatar" src="tema/user.jpg"> </div>
                              <div class="body">
                                <div class="name"> <a href="http://192.69.216.111/themes/preview/ace/index.html#">Bob Doe</a> </div>
                                <div class="time"> <i class="icon-time"></i> <span class="green">20 min</span> </div>
                                <div> <span class="label label-warning label-sm">pending</span>
                                  <div class="inline position-relative">
                                    <button class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown"> <i class="icon-angle-down icon-only bigger-120"></i> </button>
                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                      <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Approve"> <span class="green"> <i class="icon-ok bigger-110"></i> </span> </a> </li>
                                      <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="tooltip-warning" data-rel="tooltip" title="" data-original-title="Reject"> <span class="orange"> <i class="icon-remove bigger-110"></i> </span> </a> </li>
                                      <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete"> <span class="red"> <i class="icon-trash bigger-110"></i> </span> </a> </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="itemdiv memberdiv">
                              <div class="user"> <img alt="Joe Doe&#39;s avatar" src="tema/avatar2.png"> </div>
                              <div class="body">
                                <div class="name"> <a href="http://192.69.216.111/themes/preview/ace/index.html#">Joe Doe</a> </div>
                                <div class="time"> <i class="icon-time"></i> <span class="green">1 hour</span> </div>
                                <div> <span class="label label-warning label-sm">pending</span>
                                  <div class="inline position-relative">
                                    <button class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown"> <i class="icon-angle-down icon-only bigger-120"></i> </button>
                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                      <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Approve"> <span class="green"> <i class="icon-ok bigger-110"></i> </span> </a> </li>
                                      <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="tooltip-warning" data-rel="tooltip" title="" data-original-title="Reject"> <span class="orange"> <i class="icon-remove bigger-110"></i> </span> </a> </li>
                                      <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete"> <span class="red"> <i class="icon-trash bigger-110"></i> </span> </a> </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="itemdiv memberdiv">
                              <div class="user"> <img alt="Jim Doe&#39;s avatar" src="tema/avatar.png"> </div>
                              <div class="body">
                                <div class="name"> <a href="http://192.69.216.111/themes/preview/ace/index.html#">Jim Doe</a> </div>
                                <div class="time"> <i class="icon-time"></i> <span class="green">2 hour</span> </div>
                                <div> <span class="label label-warning label-sm">pending</span>
                                  <div class="inline position-relative">
                                    <button class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown"> <i class="icon-angle-down icon-only bigger-120"></i> </button>
                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                      <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Approve"> <span class="green"> <i class="icon-ok bigger-110"></i> </span> </a> </li>
                                      <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="tooltip-warning" data-rel="tooltip" title="" data-original-title="Reject"> <span class="orange"> <i class="icon-remove bigger-110"></i> </span> </a> </li>
                                      <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete"> <span class="red"> <i class="icon-trash bigger-110"></i> </span> </a> </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="itemdiv memberdiv">
                              <div class="user"> <img alt="Alex Doe&#39;s avatar" src="tema/avatar5.png"> </div>
                              <div class="body">
                                <div class="name"> <a href="http://192.69.216.111/themes/preview/ace/index.html#">Alex Doe</a> </div>
                                <div class="time"> <i class="icon-time"></i> <span class="green">3 hour</span> </div>
                                <div> <span class="label label-danger label-sm">blocked</span> </div>
                              </div>
                            </div>
                            <div class="itemdiv memberdiv">
                              <div class="user"> <img alt="Bob Doe&#39;s avatar" src="tema/avatar2.png"> </div>
                              <div class="body">
                                <div class="name"> <a href="http://192.69.216.111/themes/preview/ace/index.html#">Bob Doe</a> </div>
                                <div class="time"> <i class="icon-time"></i> <span class="green">6 hour</span> </div>
                                <div> <span class="label label-success label-sm arrowed-in">approved</span> </div>
                              </div>
                            </div>
                            <div class="itemdiv memberdiv">
                              <div class="user"> <img alt="Susan&#39;s avatar" src="tema/avatar3.png"> </div>
                              <div class="body">
                                <div class="name"> <a href="http://192.69.216.111/themes/preview/ace/index.html#">Susan</a> </div>
                                <div class="time"> <i class="icon-time"></i> <span class="green">yesterday</span> </div>
                                <div> <span class="label label-success label-sm arrowed-in">approved</span> </div>
                              </div>
                            </div>
                            <div class="itemdiv memberdiv">
                              <div class="user"> <img alt="Phil Doe&#39;s avatar" src="tema/avatar4.png"> </div>
                              <div class="body">
                                <div class="name"> <a href="http://192.69.216.111/themes/preview/ace/index.html#">Phil Doe</a> </div>
                                <div class="time"> <i class="icon-time"></i> <span class="green">2 days ago</span> </div>
                                <div> <span class="label label-info label-sm arrowed-in arrowed-in-right">online</span> </div>
                              </div>
                            </div>
                            <div class="itemdiv memberdiv">
                              <div class="user"> <img alt="Alexa Doe&#39;s avatar" src="tema/avatar1.png"> </div>
                              <div class="body">
                                <div class="name"> <a href="http://192.69.216.111/themes/preview/ace/index.html#">Alexa Doe</a> </div>
                                <div class="time"> <i class="icon-time"></i> <span class="green">3 days ago</span> </div>
                                <div> <span class="label label-success label-sm arrowed-in">approved</span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="center"> <i class="icon-group icon-2x green"></i> &nbsp; <a href="http://192.69.216.111/themes/preview/ace/index.html#"> See all members &nbsp; <i class="icon-arrow-right"></i> </a> </div>
                          <div class="hr hr-double hr8"></div>
                        </div>
                        <!-- member-tab -->
                        
                        <div id="comment-tab" class="tab-pane">
                          <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;">
                            <div class="comments" style="overflow: hidden; width: auto; height: 300px;">
                              <div class="itemdiv commentdiv">
                                <div class="user"> <img alt="Bob Doe&#39;s Avatar" src="tema/avatar.png"> </div>
                                <div class="body">
                                  <div class="name"> <a href="http://192.69.216.111/themes/preview/ace/index.html#">Bob Doe</a> </div>
                                  <div class="time"> <i class="icon-time"></i> <span class="green">6 min</span> </div>
                                  <div class="text"> <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis ??? </div>
                                </div>
                                <div class="tools">
                                  <div class="inline position-relative">
                                    <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"> <i class="icon-angle-down icon-only bigger-120"></i> </button>
                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                      <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Approve"> <span class="green"> <i class="icon-ok bigger-110"></i> </span> </a> </li>
                                      <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="tooltip-warning" data-rel="tooltip" title="" data-original-title="Reject"> <span class="orange"> <i class="icon-remove bigger-110"></i> </span> </a> </li>
                                      <li> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete"> <span class="red"> <i class="icon-trash bigger-110"></i> </span> </a> </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="itemdiv commentdiv">
                                <div class="user"> <img alt="Jennifer&#39;s Avatar" src="tema/avatar1.png"> </div>
                                <div class="body">
                                  <div class="name"> <a href="http://192.69.216.111/themes/preview/ace/index.html#">Jennifer</a> </div>
                                  <div class="time"> <i class="icon-time"></i> <span class="blue">15 min</span> </div>
                                  <div class="text"> <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis ??? </div>
                                </div>
                                <div class="tools">
                                  <div class="action-buttons bigger-125"> <a href="http://192.69.216.111/themes/preview/ace/index.html#"> <i class="icon-pencil blue"></i> </a> <a href="http://192.69.216.111/themes/preview/ace/index.html#"> <i class="icon-trash red"></i> </a> </div>
                                </div>
                              </div>
                              <div class="itemdiv commentdiv">
                                <div class="user"> <img alt="Joe&#39;s Avatar" src="tema/avatar2.png"> </div>
                                <div class="body">
                                  <div class="name"> <a href="http://192.69.216.111/themes/preview/ace/index.html#">Joe</a> </div>
                                  <div class="time"> <i class="icon-time"></i> <span class="orange">22 min</span> </div>
                                  <div class="text"> <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis ??? </div>
                                </div>
                                <div class="tools">
                                  <div class="action-buttons bigger-125"> <a href="http://192.69.216.111/themes/preview/ace/index.html#"> <i class="icon-pencil blue"></i> </a> <a href="http://192.69.216.111/themes/preview/ace/index.html#"> <i class="icon-trash red"></i> </a> </div>
                                </div>
                              </div>
                              <div class="itemdiv commentdiv">
                                <div class="user"> <img alt="Rita&#39;s Avatar" src="tema/avatar3.png"> </div>
                                <div class="body">
                                  <div class="name"> <a href="http://192.69.216.111/themes/preview/ace/index.html#">Rita</a> </div>
                                  <div class="time"> <i class="icon-time"></i> <span class="red">50 min</span> </div>
                                  <div class="text"> <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis ??? </div>
                                </div>
                                <div class="tools">
                                  <div class="action-buttons bigger-125"> <a href="http://192.69.216.111/themes/preview/ace/index.html#"> <i class="icon-pencil blue"></i> </a> <a href="http://192.69.216.111/themes/preview/ace/index.html#"> <i class="icon-trash red"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="slimScrollBar ui-draggable" style="background-color: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; right: 1px; background-position: initial initial; background-repeat: initial initial;"></div>
                            <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; background-color: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px; background-position: initial initial; background-repeat: initial initial;"></div>
                          </div>
                          <div class="hr hr8"></div>
                          <div class="center"> <i class="icon-comments-alt icon-2x green"></i> &nbsp; <a href="http://192.69.216.111/themes/preview/ace/index.html#"> See all comments &nbsp; <i class="icon-arrow-right"></i> </a> </div>
                          <div class="hr hr-double hr8"></div>
                        </div>
                      </div>
                    </div>
                    <!-- /widget-main --> 
                  </div>
                  <!-- /widget-body --> 
                </div>
                <!-- /widget-box --> 
              </div>
              <!-- /span -->
              
              <div class="col-sm-6">
                <div class="widget-box ">
                  <div class="widget-header">
                    <h4 class="lighter smaller"> <i class="icon-comment blue"></i> Conversation </h4>
                  </div>
                  <div class="widget-body">
                    <div class="widget-main no-padding">
                      <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;">
                        <div class="dialogs" style="overflow: hidden; width: auto; height: 300px;">
                          <div class="itemdiv dialogdiv">
                            <div class="user"> <img alt="Alexa&#39;s Avatar" src="tema/avatar1.png"> </div>
                            <div class="body">
                              <div class="time"> <i class="icon-time"></i> <span class="green">4 sec</span> </div>
                              <div class="name"> <a href="http://192.69.216.111/themes/preview/ace/index.html#">Alexa</a> </div>
                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>
                              <div class="tools"> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="btn btn-minier btn-info"> <i class="icon-only icon-share-alt"></i> </a> </div>
                            </div>
                          </div>
                          <div class="itemdiv dialogdiv">
                            <div class="user"> <img alt="John&#39;s Avatar" src="tema/avatar.png"> </div>
                            <div class="body">
                              <div class="time"> <i class="icon-time"></i> <span class="blue">38 sec</span> </div>
                              <div class="name"> <a href="http://192.69.216.111/themes/preview/ace/index.html#">John</a> </div>
                              <div class="text">Raw denim you probably haven't heard of them jean shorts Austin.</div>
                              <div class="tools"> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="btn btn-minier btn-info"> <i class="icon-only icon-share-alt"></i> </a> </div>
                            </div>
                          </div>
                          <div class="itemdiv dialogdiv">
                            <div class="user"> <img alt="Bob&#39;s Avatar" src="tema/user.jpg"> </div>
                            <div class="body">
                              <div class="time"> <i class="icon-time"></i> <span class="orange">2 min</span> </div>
                              <div class="name"> <a href="http://192.69.216.111/themes/preview/ace/index.html#">Bob</a> <span class="label label-info arrowed arrowed-in-right">admin</span> </div>
                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>
                              <div class="tools"> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="btn btn-minier btn-info"> <i class="icon-only icon-share-alt"></i> </a> </div>
                            </div>
                          </div>
                          <div class="itemdiv dialogdiv">
                            <div class="user"> <img alt="Jim&#39;s Avatar" src="tema/avatar4.png"> </div>
                            <div class="body">
                              <div class="time"> <i class="icon-time"></i> <span class="grey">3 min</span> </div>
                              <div class="name"> <a href="http://192.69.216.111/themes/preview/ace/index.html#">Jim</a> </div>
                              <div class="text">Raw denim you probably haven't heard of them jean shorts Austin.</div>
                              <div class="tools"> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="btn btn-minier btn-info"> <i class="icon-only icon-share-alt"></i> </a> </div>
                            </div>
                          </div>
                          <div class="itemdiv dialogdiv">
                            <div class="user"> <img alt="Alexa&#39;s Avatar" src="tema/avatar1.png"> </div>
                            <div class="body">
                              <div class="time"> <i class="icon-time"></i> <span class="green">4 min</span> </div>
                              <div class="name"> <a href="http://192.69.216.111/themes/preview/ace/index.html#">Alexa</a> </div>
                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                              <div class="tools"> <a href="http://192.69.216.111/themes/preview/ace/index.html#" class="btn btn-minier btn-info"> <i class="icon-only icon-share-alt"></i> </a> </div>
                            </div>
                          </div>
                        </div>
                        <div class="slimScrollBar ui-draggable" style="background-color: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; right: 1px; height: 228.4263959390863px; background-position: initial initial; background-repeat: initial initial;"></div>
                        <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; background-color: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px; background-position: initial initial; background-repeat: initial initial;"></div>
                      </div>
                      <form>
                        <div class="form-actions">
                          <div class="input-group">
                            <input placeholder="Type your message here ..." type="text" class="form-control" name="message">
                            <span class="input-group-btn">
                            <button class="btn btn-sm btn-info no-radius" type="button"> <i class="icon-share-alt"></i> Send </button>
                            </span> </div>
                        </div>
                      </form>
                    </div>
                    <!-- /widget-main --> 
                  </div>
                  <!-- /widget-body --> 
                </div>
                <!-- /widget-box --> 
              </div>
              <!-- /span --> 
            </div>
            <!-- /row --> 
            
            <!-- PAGE CONTENT ENDS --> 
          </div>
          <!-- /.col --> 
        </div>
        <!-- /.row --> 
      </div>
      <!-- /.page-content --> 
    </div>
    <!-- /.main-content -->
    
    <div class="ace-settings-container" id="ace-settings-container">
      <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn"> <i class="icon-cog bigger-150"></i> </div>
      <div class="ace-settings-box" id="ace-settings-box">
        <div>
          <div class="pull-left">
            <select id="skin-colorpicker" class="hide" style="display: none;">
              <option data-skin="default" value="#438EB9">#438EB9</option>
              <option data-skin="skin-1" value="#222A2D">#222A2D</option>
              <option data-skin="skin-2" value="#C6487E">#C6487E</option>
              <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
            </select>
            <div class="dropdown dropdown-colorpicker"><a data-toggle="dropdown" class="dropdown-toggle" href="http://192.69.216.111/themes/preview/ace/index.html#"><span class="btn-colorpicker" style="background-color:#438EB9"></span></a>
              <ul class="dropdown-menu dropdown-caret">
                <li><a class="colorpick-btn selected" href="http://192.69.216.111/themes/preview/ace/index.html#" style="background-color:#438EB9;" data-color="#438EB9"></a></li>
                <li><a class="colorpick-btn" href="http://192.69.216.111/themes/preview/ace/index.html#" style="background-color:#222A2D;" data-color="#222A2D"></a></li>
                <li><a class="colorpick-btn" href="http://192.69.216.111/themes/preview/ace/index.html#" style="background-color:#C6487E;" data-color="#C6487E"></a></li>
                <li><a class="colorpick-btn" href="http://192.69.216.111/themes/preview/ace/index.html#" style="background-color:#D0D0D0;" data-color="#D0D0D0"></a></li>
              </ul>
            </div>
          </div>
          <span>&nbsp; Choose Skin</span> </div>
        <div>
          <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar">
          <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
        </div>
        <div>
          <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar">
          <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
        </div>
        <div>
          <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs">
          <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
        </div>
        <div>
          <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl">
          <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
        </div>
        <div>
          <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container">
          <label class="lbl" for="ace-settings-add-container"> Inside <b>.container</b> </label>
        </div>
      </div>
    </div>
    <!-- /#ace-settings-container --> 
  </div>
  <!-- /.main-container-inner --> 
  
  <a href="http://192.69.216.111/themes/preview/ace/index.html#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse"> <i class="icon-double-angle-up icon-only bigger-110"></i> </a> </div>

<? $this->load->view(''.$this->session->userdata('SCL_SSS_TIPO').'/dashboard/footer'); 
exit;?>