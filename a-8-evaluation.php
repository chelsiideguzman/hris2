<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php include'all/head.php' ?>
    <title>Performance Evaluation</title>

</head>

<body>
    <div id="wrap">
        <?php include'all/header.php' ?>
        <section class="container-fluid">
            <section class="row">
                <?php include'a-sidenav.php' ?>
                <article class="col-md-10 col-sm-10 p20">
                  <div class="alert alert-success alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong>Well done!</strong> You successfully evaluated an employee.
                  </div>

                    <div class="titleh">
                        <h3>Employee List</h3>
                    </div>
                    <div class="tabletop clearfix">
                        <div class="tabletopleft pull-left">
                        </div>
                        <div class="tabletopright pull-right">
                            <div class="dropdown">
                                <button class="btn btn-primary btn-raised dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Advanced Search &nbsp; <span class="caret"></span></button>
                                <ul class="dropdown-menu col-md-12 col-sm-12" aria-labelledby="dropdownMenu1">
                                    <li>
                                        <form class="" action="" method="post">
                                            <div class="p20">
                                                <div class="form-group label-floating">
                                                    <label for="a-8-evaluation-search-empid" class="control-label">Employee ID</label>
                                                    <input type="text" class="form-control" id="a-8-evaluation-search-empid" name="a-8-evaluation-search-empid" />
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group label-floating">
                                                    <label for="a-8-evaluation-search-name" class="control-label">Name</label>
                                                    <input type="text" class="form-control" id="a-8-evaluation-search-name" name="a-8-evaluation-search-name" />
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group">
                                                    <label for="a-8-evaluation-search-jobtitle">Job Title</label>
                                                    <select id="a-8-evaluation-search-jobtitle" class="form-control" name="a-8-evaluation-search-jobtitle">
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group">
                                                    <label for="a-8-evaluation-search-department">Department</label>
                                                    <select id="a-8-evaluation-search-department" class="form-control" name="a-8-evaluation-search-department">
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group">
                                                    <label for="a-8-evaluation-search-branchname">Branch Name</label>
                                                    <select id="a-8-evaluation-search-branchname" class="form-control" name="a-8-evaluation-search-branchname">
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group">
                                                    <label for="a-8-evaluation-search-pending">Status</label>
                                                    <select id="a-8-evaluation-search-pending" class="form-control" name="a-8-evaluation-search-pending">
                                                        <option>Evaluated</option>
                                                        <option>Pending Evaluation</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <button type="submit" name="button" class="btn btn-primary btn-raised btn-block">Search</button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <span>You have searched for: <span><i>lorem ipsum</i></span></span>
                        </div>
                    </div>
                    <div class="row p20">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="list-group">
                                    <div class="list-group-item">
                                        <div class="row-picture">
                                            <img class="circle" src="" alt="Image">
                                        </div>
                                        <div class="row-content">
                                            <h4 class="list-group-item-heading pull-left"><span class="text-warning">2016000001</span></h4>
                                            <p class="pull-right p10">
                                                <a href="a-8-evaluation-viewevaluation.php"><i class="fa fa-external-link"></i></a> &nbsp;
                                                <a href="a-8-evaluation-evaluate.php"><i class="fa fa-bar-chart-o"></i></a> &nbsp;
                                            </p><br /><br />
                                            <p class="list-group-item-text" style="">Chua, Olivia <br /> Department - Job title</p>
                                        </div>
                                    </div>
                                    <div class="list-group-separator"></div>
                                    <div class="list-group-item">
                                        <div class="row-picture">
                                            <img class="circle" src="" alt="Image">
                                        </div>
                                        <div class="row-content">
                                            <h4 class="list-group-item-heading pull-left"><span class="">2016000001</span></h4>
                                            <p class="pull-right p10">
                                                <a href="a-8-evaluation-viewevaluation.php"><i class="fa fa-external-link"></i></a> &nbsp;
                                                <a href="a-8-evaluation-evaluate.php"><i class="fa fa-bar-chart-o"></i></a> &nbsp;
                                            </p><br /><br />
                                            <p class="list-group-item-text" style="">Chua, Olivia <br /> Department - Job title</p>
                                        </div>
                                    </div>
                                    <div class="list-group-separator"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="list-group" style="clear: both;">
                                    <div class="list-group-item">
                                        <div class="row-picture">
                                            <img class="circle" src="" alt="Image">
                                        </div>
                                        <div class="row-content">
                                            <h4 class="list-group-item-heading pull-left"><span class="text-warning">2016000001</span></h4>
                                            <p class="pull-right p10">
                                                <a href="a-8-evaluation-viewevaluation.php"><i class="fa fa-external-link"></i></a> &nbsp;
                                                <a href="a-8-evaluation-evaluate.php"><i class="fa fa-bar-chart-o"></i></a> &nbsp;
                                            </p><br /><br />
                                            <p class="list-group-item-text" style="">Chua, Olivia <br /> Department - Job title</p>
                                        </div>
                                    </div>
                                    <div class="list-group-separator"></div>
                                    <div class="list-group-item">
                                        <div class="row-picture">
                                            <img class="circle" src="" alt="Image">
                                        </div>
                                        <div class="row-content">
                                            <h4 class="list-group-item-heading pull-left"><span class="">2016000001</span></h4>
                                            <p class="pull-right p10">
                                                <a href="a-8-evaluation-viewevaluation.php"><i class="fa fa-external-link "></i></a> &nbsp;
                                                <a href="a-8-evaluation-evaluate.php"><i class="fa fa-bar-chart-o"></i></a> &nbsp;
                                            </p><br /><br />
                                            <p class="list-group-item-text" style="">Chua, Olivia <br /> Department - Job title</p>
                                        </div>
                                    </div>
                                    <div class="list-group-separator"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="list-group" style="clear: both;">
                                    <div class="list-group-item">
                                        <div class="row-picture">
                                            <img class="circle" src="" alt="Image">
                                        </div>
                                        <div class="row-content">
                                            <h4 class="list-group-item-heading pull-left"><span class="text-warning">2016000001</span></h4>
                                            <p class="pull-right p10">
                                                <a href="a-8-evaluation-viewevaluation.php"><i class="fa fa-external-link "></i></a> &nbsp;
                                                <a href="a-8-evaluation-evaluate.php"><i class="fa fa-bar-chart-o"></i></a> &nbsp;
                                            </p><br /><br />
                                            <p class="list-group-item-text" style="">Chua, Olivia <br /> Department - Job title</p>
                                        </div>
                                    </div>
                                    <div class="list-group-separator"></div>
                                    <div class="list-group-item">
                                        <div class="row-picture">
                                            <img class="circle" src="" alt="Image">
                                        </div>
                                        <div class="row-content">
                                            <h4 class="list-group-item-heading pull-left"><span class="">2016000001</span></h4>
                                            <p class="pull-right p10">
                                                <a href="a-8-evaluation-viewevaluation.php"><i class="fa fa-external-link"></i></a> &nbsp;
                                                <a href="a-8-evaluation-evaluate.php"><i class="fa fa-bar-chart-o"></i></a> &nbsp;
                                            </p><br /><br />
                                            <p class="list-group-item-text" style="">Chua, Olivia <br /> Department - Job title</p>
                                        </div>
                                    </div>
                                    <div class="list-group-separator"></div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <nav aria-label="Page navigation" class="text-center">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </article>
            </section>
        </section>

    </div>
    <!--wrap-->
    <?php include'all/script.php' ?>
</body>

</html>
