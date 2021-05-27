<? 
 $this->load->view('layout/header'); 
 $this->load->view('layout/menu'); 
?>

<div class="page-content">
  <div class="page-header">
    <h1> Século <small> <i class="icon-double-angle-right"></i> Inicio </small> </h1>
  </div>
  <!-- /.page-header -->
  
  <div class="row">
    <div class="col-xs-12"> 
      <!-- PAGE CONTENT BEGINS -->
      
      <div class="row">
        <div class="col-sm-9">
          <div class="widget-box transparent" id="recent-box">
            <div class="widget-header">
              <h4 class="lighter smaller"> <i class="icon-list orange"></i> Recentes </h4>
              <div class="widget-toolbar no-border">
                <ul class="nav nav-tabs" id="recent-tab">
                  <li class="active"> <a data-toggle="tab" href="#aula">Aulas de Hoje</a> </li>
                  <li> <a data-toggle="tab" href="#assunto">Assuntos</a> </li>
                  <li> <a data-toggle="tab" href="#professor">Professores</a> </li>
                  <li> <a data-toggle="tab" href="#comentario">Comentários</a> </li>
                </ul>
              </div>
            </div>
            <div class="widget-body">
              <div class="widget-main padding-4">
                <div class="tab-content padding-8 overflow-visible">
                  <div id="aula" class="tab-pane active">
                    <ul id="aula" class="item-list ui-sortable">
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
                        <div class="pull-right action-buttons"> <a href="#" class="blue"> <i class="icon-pencil bigger-130"></i> </a> <span class="vbar"></span> <a href="#" class="red"> <i class="icon-trash bigger-130"></i> </a> <span class="vbar"></span> <a href="#" class="green"> <i class="icon-flag bigger-130"></i> </a> </div>
                      </li>
                      <li class="item-default clearfix">
                        <label class="inline">
                          <input type="checkbox" class="ace">
                          <span class="lbl"> Adding new features</span> </label>
                        <div class="inline pull-right position-relative dropdown-hover">
                          <button class="btn btn-minier bigger btn-primary"> <i class="icon-cog icon-only bigger-120"></i> </button>
                          <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close pull-right">
                            <li> <a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Mark as done"> <span class="green"> <i class="icon-ok bigger-110"></i> </span> </a> </li>
                            <li> <a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete"> <span class="red"> <i class="icon-trash bigger-110"></i> </span> </a> </li>
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
                  <div id="assunto" class="tab-pane">
                    <div class="clearfix">
                      <div class="itemdiv memberdiv">
                        <div class="user"> <img alt="Bob Doe&#39;s avatar" src="tema/user.jpg"> </div>
                        <div class="body">
                          <div class="name"> <a href="#">Bob Doe</a> </div>
                          <div class="time"> <i class="icon-time"></i> <span class="green">20 min</span> </div>
                          <div> <span class="label label-warning label-sm">pending</span>
                            <div class="inline position-relative">
                              <button class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown"> <i class="icon-angle-down icon-only bigger-120"></i> </button>
                              <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                <li> <a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Approve"> <span class="green"> <i class="icon-ok bigger-110"></i> </span> </a> </li>
                                <li> <a href="#" class="tooltip-warning" data-rel="tooltip" title="" data-original-title="Reject"> <span class="orange"> <i class="icon-remove bigger-110"></i> </span> </a> </li>
                                <li> <a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete"> <span class="red"> <i class="icon-trash bigger-110"></i> </span> </a> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="itemdiv memberdiv">
                        <div class="user"> <img alt="Joe Doe&#39;s avatar" src="tema/avatar2.png"> </div>
                        <div class="body">
                          <div class="name"> <a href="#">Joe Doe</a> </div>
                          <div class="time"> <i class="icon-time"></i> <span class="green">1 hour</span> </div>
                          <div> <span class="label label-warning label-sm">pending</span>
                            <div class="inline position-relative">
                              <button class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown"> <i class="icon-angle-down icon-only bigger-120"></i> </button>
                              <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                <li> <a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Approve"> <span class="green"> <i class="icon-ok bigger-110"></i> </span> </a> </li>
                                <li> <a href="#" class="tooltip-warning" data-rel="tooltip" title="" data-original-title="Reject"> <span class="orange"> <i class="icon-remove bigger-110"></i> </span> </a> </li>
                                <li> <a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete"> <span class="red"> <i class="icon-trash bigger-110"></i> </span> </a> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="itemdiv memberdiv">
                        <div class="user"> <img alt="Jim Doe&#39;s avatar" src="tema/avatar.png"> </div>
                        <div class="body">
                          <div class="name"> <a href="#">Jim Doe</a> </div>
                          <div class="time"> <i class="icon-time"></i> <span class="green">2 hour</span> </div>
                          <div> <span class="label label-warning label-sm">pending</span>
                            <div class="inline position-relative">
                              <button class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown"> <i class="icon-angle-down icon-only bigger-120"></i> </button>
                              <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                <li> <a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Approve"> <span class="green"> <i class="icon-ok bigger-110"></i> </span> </a> </li>
                                <li> <a href="#" class="tooltip-warning" data-rel="tooltip" title="" data-original-title="Reject"> <span class="orange"> <i class="icon-remove bigger-110"></i> </span> </a> </li>
                                <li> <a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete"> <span class="red"> <i class="icon-trash bigger-110"></i> </span> </a> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="itemdiv memberdiv">
                        <div class="user"> <img alt="Alex Doe&#39;s avatar" src="tema/avatar5.png"> </div>
                        <div class="body">
                          <div class="name"> <a href="#">Alex Doe</a> </div>
                          <div class="time"> <i class="icon-time"></i> <span class="green">3 hour</span> </div>
                          <div> <span class="label label-danger label-sm">blocked</span> </div>
                        </div>
                      </div>
                      <div class="itemdiv memberdiv">
                        <div class="user"> <img alt="Bob Doe&#39;s avatar" src="tema/avatar2.png"> </div>
                        <div class="body">
                          <div class="name"> <a href="#">Bob Doe</a> </div>
                          <div class="time"> <i class="icon-time"></i> <span class="green">6 hour</span> </div>
                          <div> <span class="label label-success label-sm arrowed-in">approved</span> </div>
                        </div>
                      </div>
                      <div class="itemdiv memberdiv">
                        <div class="user"> <img alt="Susan&#39;s avatar" src="tema/avatar3.png"> </div>
                        <div class="body">
                          <div class="name"> <a href="#">Susan</a> </div>
                          <div class="time"> <i class="icon-time"></i> <span class="green">yesterday</span> </div>
                          <div> <span class="label label-success label-sm arrowed-in">approved</span> </div>
                        </div>
                      </div>
                      <div class="itemdiv memberdiv">
                        <div class="user"> <img alt="Phil Doe&#39;s avatar" src="tema/avatar4.png"> </div>
                        <div class="body">
                          <div class="name"> <a href="#">Phil Doe</a> </div>
                          <div class="time"> <i class="icon-time"></i> <span class="green">2 days ago</span> </div>
                          <div> <span class="label label-info label-sm arrowed-in arrowed-in-right">online</span> </div>
                        </div>
                      </div>
                      <div class="itemdiv memberdiv">
                        <div class="user"> <img alt="Alexa Doe&#39;s avatar" src="tema/avatar1.png"> </div>
                        <div class="body">
                          <div class="name"> <a href="#">Alexa Doe</a> </div>
                          <div class="time"> <i class="icon-time"></i> <span class="green">3 days ago</span> </div>
                          <div> <span class="label label-success label-sm arrowed-in">approved</span> </div>
                        </div>
                      </div>
                    </div>
                    <div class="center"> <i class="icon-group icon-2x green"></i> &nbsp; <a href="#"> See all members &nbsp; <i class="icon-arrow-right"></i> </a> </div>
                    <div class="hr hr-double hr8"></div>
                  </div>
                  <!-- TAB PROFESSOR -->
                  <div id="professor" class="tab-pane">
                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;">
                      <div class="comments" style="overflow: hidden; width: auto; height: 300px;">
                        <div class="itemdiv commentdiv">
                          <div class="user"> <img alt="Bob Doe&#39;s Avatar" src="tema/avatar.png"> </div>
                          <div class="body">
                            <div class="name"> <a href="#">Bob Doe</a> </div>
                            <div class="time"> <i class="icon-time"></i> <span class="green">6 min</span> </div>
                            <div class="text"> <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis … </div>
                          </div>
                          <div class="tools">
                            <div class="inline position-relative">
                              <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"> <i class="icon-angle-down icon-only bigger-120"></i> </button>
                              <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                <li> <a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Approve"> <span class="green"> <i class="icon-ok bigger-110"></i> </span> </a> </li>
                                <li> <a href="#" class="tooltip-warning" data-rel="tooltip" title="" data-original-title="Reject"> <span class="orange"> <i class="icon-remove bigger-110"></i> </span> </a> </li>
                                <li> <a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete"> <span class="red"> <i class="icon-trash bigger-110"></i> </span> </a> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="itemdiv commentdiv">
                          <div class="user"> <img alt="Jennifer&#39;s Avatar" src="tema/avatar1.png"> </div>
                          <div class="body">
                            <div class="name"> <a href="#">Jennifer</a> </div>
                            <div class="time"> <i class="icon-time"></i> <span class="blue">15 min</span> </div>
                            <div class="text"> <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis … </div>
                          </div>
                          <div class="tools">
                            <div class="action-buttons bigger-125"> <a href="#"> <i class="icon-pencil blue"></i> </a> <a href="#"> <i class="icon-trash red"></i> </a> </div>
                          </div>
                        </div>
                        <div class="itemdiv commentdiv">
                          <div class="user"> <img alt="Joe&#39;s Avatar" src="tema/avatar2.png"> </div>
                          <div class="body">
                            <div class="name"> <a href="#">Joe</a> </div>
                            <div class="time"> <i class="icon-time"></i> <span class="orange">22 min</span> </div>
                            <div class="text"> <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis … </div>
                          </div>
                          <div class="tools">
                            <div class="action-buttons bigger-125"> <a href="#"> <i class="icon-pencil blue"></i> </a> <a href="#"> <i class="icon-trash red"></i> </a> </div>
                          </div>
                        </div>
                        <div class="itemdiv commentdiv">
                          <div class="user"> <img alt="Rita&#39;s Avatar" src="tema/avatar3.png"> </div>
                          <div class="body">
                            <div class="name"> <a href="#">Rita</a> </div>
                            <div class="time"> <i class="icon-time"></i> <span class="red">50 min</span> </div>
                            <div class="text"> <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis … </div>
                          </div>
                          <div class="tools">
                            <div class="action-buttons bigger-125"> <a href="#"> <i class="icon-pencil blue"></i> </a> <a href="#"> <i class="icon-trash red"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="slimScrollBar ui-draggable" style="background-color: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; right: 1px; background-position: initial initial; background-repeat: initial initial;"></div>
                      <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; background-color: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px; background-position: initial initial; background-repeat: initial initial;"></div>
                    </div>
                    <div class="hr hr8"></div>
                    <div class="center"> <i class="icon-comments-alt icon-2x green"></i> &nbsp; <a href="#"> See all comments &nbsp; <i class="icon-arrow-right"></i> </a> </div>
                    <div class="hr hr-double hr8"></div>
                  </div>
                  <!-- TAB COMENTÁRIO -->
                  <div id="comentario" class="tab-pane">
                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;">
                      <div class="comments" style="overflow: hidden; width: auto; height: 300px;">
                        <div class="itemdiv commentdiv">
                          <div class="user"> <img alt="Bob Doe&#39;s Avatar" src="tema/avatar.png"> </div>
                          <div class="body">
                            <div class="name"> <a href="#">Bob Doe</a> </div>
                            <div class="time"> <i class="icon-time"></i> <span class="green">6 min</span> </div>
                            <div class="text"> <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis … </div>
                          </div>
                          <div class="tools">
                            <div class="inline position-relative">
                              <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown"> <i class="icon-angle-down icon-only bigger-120"></i> </button>
                              <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                <li> <a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Approve"> <span class="green"> <i class="icon-ok bigger-110"></i> </span> </a> </li>
                                <li> <a href="#" class="tooltip-warning" data-rel="tooltip" title="" data-original-title="Reject"> <span class="orange"> <i class="icon-remove bigger-110"></i> </span> </a> </li>
                                <li> <a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete"> <span class="red"> <i class="icon-trash bigger-110"></i> </span> </a> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="itemdiv commentdiv">
                          <div class="user"> <img alt="Jennifer&#39;s Avatar" src="tema/avatar1.png"> </div>
                          <div class="body">
                            <div class="name"> <a href="#">Jennifer</a> </div>
                            <div class="time"> <i class="icon-time"></i> <span class="blue">15 min</span> </div>
                            <div class="text"> <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis … </div>
                          </div>
                          <div class="tools">
                            <div class="action-buttons bigger-125"> <a href="#"> <i class="icon-pencil blue"></i> </a> <a href="#"> <i class="icon-trash red"></i> </a> </div>
                          </div>
                        </div>
                        <div class="itemdiv commentdiv">
                          <div class="user"> <img alt="Joe&#39;s Avatar" src="tema/avatar2.png"> </div>
                          <div class="body">
                            <div class="name"> <a href="#">Joe</a> </div>
                            <div class="time"> <i class="icon-time"></i> <span class="orange">22 min</span> </div>
                            <div class="text"> <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis … </div>
                          </div>
                          <div class="tools">
                            <div class="action-buttons bigger-125"> <a href="#"> <i class="icon-pencil blue"></i> </a> <a href="#"> <i class="icon-trash red"></i> </a> </div>
                          </div>
                        </div>
                        <div class="itemdiv commentdiv">
                          <div class="user"> <img alt="Rita&#39;s Avatar" src="tema/avatar3.png"> </div>
                          <div class="body">
                            <div class="name"> <a href="#">Rita</a> </div>
                            <div class="time"> <i class="icon-time"></i> <span class="red">50 min</span> </div>
                            <div class="text"> <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis … </div>
                          </div>
                          <div class="tools">
                            <div class="action-buttons bigger-125"> <a href="#"> <i class="icon-pencil blue"></i> </a> <a href="#"> <i class="icon-trash red"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="slimScrollBar ui-draggable" style="background-color: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; right: 1px; background-position: initial initial; background-repeat: initial initial;"></div>
                      <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; background-color: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px; background-position: initial initial; background-repeat: initial initial;"></div>
                    </div>
                    <div class="hr hr8"></div>
                    <div class="center"> <i class="icon-comments-alt icon-2x green"></i> &nbsp; <a href="#"> See all comments &nbsp; <i class="icon-arrow-right"></i> </a> </div>
                    <div class="hr hr-double hr8"></div>
                  </div>
                  <!--  FINAL DAS TABS -->
                </div>
              </div>
              <!-- /widget-main --> 
            </div>
            <!-- /widget-body --> 
          </div>
          <!-- /widget-box --> 
        </div>
        
        
        
        <div class="col-sm-3 infobox-container">
          <div class="infobox infobox-green  ">
            <div class="infobox-icon"> <i class="icon-comments"></i> </div>
            <div class="infobox-data"> <span class="infobox-data-number">32</span>
              <div class="infobox-content">comments + 2 reviews</div>
            </div>
            <div class="stat stat-success">8%</div>
          </div>
          <div class="infobox infobox-blue  ">
            <div class="infobox-icon"> <i class="icon-film"></i> </div>
            <div class="infobox-data"> <span class="infobox-data-number">11</span>
              <div class="infobox-content">Sala Virtual</div>
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
        </div>
        
        
        
        
        
        
        
    
      </div>
    </div>
  </div>
</div>
<? $this->load->view('layout/footer'); ?>
