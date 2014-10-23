<ul class="nav nav-tabs nav-tabs-inverse nav-justified nav-justified-mobile">
    <li class="active"><a href="#default-tab-1" data-toggle="tab"><i class="fa fa-picture-o m-r-5"></i> <span class="hidden-xs">Profile Information</span></a></li>
    <li class=""><a href="#default-tab-2" data-toggle="tab"><i class="fa fa-shopping-cart m-r-5"></i> <span class="hidden-xs">Purchase</span></a></li>
    <li class=""><a href="#default-tab-3" data-toggle="tab"><i class="fa fa-envelope m-r-5"></i> <span class="hidden-xs">Email</span></a></li>
</ul>

<div class="tab-content">
    <div class="tab-pane fade active in" id="default-tab-1">
        <li class="media media-lg">
            <div class="col-md-4">
                <!-- Thumbnails -->
                <div class="thumbnail">
                    <?php echo $this->Html->image('gallery/profile1.jpg', array('width' => '300px'));?>
                    <br/>
                    <ul class="list-group">
                        <li class="list-group-item" style="background-color: #dddddd; margin-bottom: 2px"><span class="fa fa-briefcase"></span> <span class="badge badge-warning">10</span>Projects</li>
                        <li class="list-group-item" style="background-color: #dddddd; margin-bottom: 2px"><span class="fa fa-envelope"></span> <span class="badge badge-info">10</span>Message</li>
                        <li class="list-group-item" style="background-color: #dddddd; margin-bottom: 2px"><span class="fa fa-warning"></span> <span class="badge badge-danger">10</span>Notification</li>
                    </ul>
                </div><!-- /Thumbnails -->
            </div>
            <div class="media-body">
                <h4>Tarek Rahman</h4>
                Nullam at risus metus. Quisque nisl purus, pulvinar ut mauris vel, elementum suscipit eros. Praesent ornare ante massa, egestas pellentesque orci convallis ut. Curabitur consequat convallis est, id luctus mauris lacinia vel. Nullam tristique lobortis mauris, ultricies fermentum lacus bibendum id. Proin non ante tortor. Suspendisse pulvinar ornare tellus nec pulvinar. Nam pellentesque accumsan mi, non pellentesque sem convallis sed. Quisque rutrum erat id auctor gravida.
            </div>

            <div class="media-body" style="margin-top: 10px">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Table Row Classes</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Email Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="active">
                                <td>1</td>
                                <td>Nicky Almera</td>
                                <td>nicky@hotmail.com</td>
                            </tr>
                            <tr class="info">
                                <td>2</td>
                                <td>Terry Khoo</td>
                                <td>terry@gmail.com</td>
                            </tr>
                            <tr class="success">
                                <td>3</td>
                                <td>Edmund Wong</td>
                                <td>edmund@yahoo.com</td>
                            </tr>
                            <tr class="warning">
                                <td>4</td>
                                <td>Harvinder Singh</td>
                                <td>harvinder@gmail.com</td>
                            </tr>
                            <tr class="danger">
                                <td>5</td>
                                <td>Terry Khoo</td>
                                <td>terry@gmail.com</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </li>


    </div>
    <div class="tab-pane fade" id="default-tab-3">
        <p>
								<span class="fa-stack fa-4x pull-left m-r-10">
									<i class="fa fa-square-o fa-stack-2x"></i>
									<i class="fa fa-twitter fa-stack-1x"></i>
								</span>
            Praesent tincidunt nulla ut elit vestibulum viverra. Sed placerat magna eget eros accumsan elementum.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis lobortis neque.
            Maecenas justo odio, bibendum fringilla quam nec, commodo rutrum quam.
            Donec cursus erat in lacus congue sodales. Nunc bibendum id augue sit amet placerat.
            Quisque et quam id felis tempus volutpat at at diam. Vivamus ac diam turpis.Sed at lacinia augue.
            Nulla facilisi. Fusce at erat suscipit, dapibus elit quis, luctus nulla.
            Quisque adipiscing dui nec orci fermentum blandit.
            Sed at lacinia augue. Nulla facilisi. Fusce at erat suscipit, dapibus elit quis, luctus nulla.
            Quisque adipiscing dui nec orci fermentum blandit.
        </p>
    </div>
</div>

<!--old data start-->

<div class="col-md-6 ui-sortable">
    <!-- begin panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
            </div>
            <h4 class="panel-title">Profile Information</h4>
        </div>
        <div class="panel-body">
            <div class="media media-lg">
                <a class="pull-left" href="javascript:;">
                    <?php echo $this->Html->image('gallery/profile1.jpg', array('class' => array('media-object')));?>
<!--                    <img src="assets/img/gallery/gallery-1.jpg" alt="" class="media-object">-->
                </a>
                <div class="media-body">
                    <h4 class="media-heading" style="text-align: center; vertical-align: middle">Media heading</h4>
                    <table class="table" >
                        <thead>
                        <tr style="align-content: center">
                            <th style="text-align: center; vertical-align: middle">Description</th>
                            <th style="text-align: left; vertical-align: middle">Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="width: 20px; text-align: center"><b>Name:</b></td>
                            <td style="width: 40px; text-align: left"><p class="text-info">Add default notification.</p></td>
                        </tr>
                        <tr>
                            <td style="width: 20px; text-align: center"><b>Name:</b></td>
                            <td style="width: 40px; text-align: left"><p class="text-info">Add default notification.</p></td>
                        </tr>
                        <tr>
                            <td style="width: 20px; text-align: center"><b>Name:</b></td>
                            <td style="width: 40px; text-align: left"><p class="text-info">Add default notification.</p></td>
                        </tr>
                        <tr>
                            <td style="width: 20px; text-align: center"><b>Name:</b></td>
                            <td style="width: 40px; text-align: left"><p class="text-info">Add default notification.</p></td>
                        </tr>
                        <tr>
                            <td style="width: 20px; text-align: center"><b>Name:</b></td>
                            <td style="width: 40px; text-align: left"><p class="text-info">Add default notification.</p></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end panel -->
</div>
<div class="col-md-6 ui-sortable">
    <!-- begin panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
            </div>
            <h4 class="panel-title">Recent Activities</h4>
        </div>
        <div class="panel-body">
            <div class="note note-success">
                <h4>Some header text here!</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Maecenas id gravida libero. Etiam semper id sem a ultricies. Donec id consequat magna.
                    Suspendisse tincidunt blandit metus, eu pretium nibh tincidunt eget.
                </p>
            </div>
            <div class="note note-info">
                <h4>Some header text here!</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Maecenas id gravida libero. Etiam semper id sem a ultricies. Donec id consequat magna.
                    Suspendisse tincidunt blandit metus, eu pretium nibh tincidunt eget.
                </p>
            </div>
        </div>
    </div>
    <!-- end panel -->
</div>