<?php
include_once '../../config/parametros.php';
include_once '../../plantilla/cabecera.php';
include_once '../../plantilla/menu.php';

?>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
.panel.with-nav-tabs .panel-heading {
    padding: 5px 5px 0 5px;
}

.panel.with-nav-tabs .nav-tabs {
    border-bottom: none;
}

.panel.with-nav-tabs .nav-justified {
    margin-bottom: -1px;
}

/********************************************************************/
/*** PANEL DEFAULT ***/
.with-nav-tabs.panel-default .nav-tabs>li>a,
.with-nav-tabs.panel-default .nav-tabs>li>a:hover,
.with-nav-tabs.panel-default .nav-tabs>li>a:focus {
    color: #777;
}

.with-nav-tabs.panel-default .nav-tabs>.open>a,
.with-nav-tabs.panel-default .nav-tabs>.open>a:hover,
.with-nav-tabs.panel-default .nav-tabs>.open>a:focus,
.with-nav-tabs.panel-default .nav-tabs>li>a:hover,
.with-nav-tabs.panel-default .nav-tabs>li>a:focus {
    color: #777;
    background-color: #ddd;
    border-color: transparent;
}

.with-nav-tabs.panel-default .nav-tabs>li.active>a,
.with-nav-tabs.panel-default .nav-tabs>li.active>a:hover,
.with-nav-tabs.panel-default .nav-tabs>li.active>a:focus {
    color: #555;
    background-color: #fff;
    border-color: #ddd;
    border-bottom-color: transparent;
}

.with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu {
    background-color: #009cde;
    border-color: #ddd;
}

.with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu>li>a {
    color: #777;
}

.with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu>li>a:hover,
.with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu>li>a:focus {
    background-color: #ddd;
}

.with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu>.active>a,
.with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu>.active>a:hover,
.with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu>.active>a:focus {
    color: #fff;
    background-color: #555;
}

/********************************************************************/
/*** PANEL PRIMARY ***/
.with-nav-tabs.panel-primary .nav-tabs>li>a,
.with-nav-tabs.panel-primary .nav-tabs>li>a:hover,
.with-nav-tabs.panel-primary .nav-tabs>li>a:focus {
    color: #fff;
}

.with-nav-tabs.panel-primary .nav-tabs>.open>a,
.with-nav-tabs.panel-primary .nav-tabs>.open>a:hover,
.with-nav-tabs.panel-primary .nav-tabs>.open>a:focus,
.with-nav-tabs.panel-primary .nav-tabs>li>a:hover,
.with-nav-tabs.panel-primary .nav-tabs>li>a:focus {
    color: #fff;
    background-color: #3071a9;
    border-color: transparent;
}

.with-nav-tabs.panel-primary .nav-tabs>li.active>a,
.with-nav-tabs.panel-primary .nav-tabs>li.active>a:hover,
.with-nav-tabs.panel-primary .nav-tabs>li.active>a:focus {
    color: #428bca;
    background-color: #fff;
    border-color: #428bca;
    border-bottom-color: transparent;
}

.with-nav-tabs.panel-primary .nav-tabs>li.dropdown .dropdown-menu {
    background-color: #428bca;
    border-color: #3071a9;
}

.with-nav-tabs.panel-primary .nav-tabs>li.dropdown .dropdown-menu>li>a {
    color: #fff;
}

.with-nav-tabs.panel-primary .nav-tabs>li.dropdown .dropdown-menu>li>a:hover,
.with-nav-tabs.panel-primary .nav-tabs>li.dropdown .dropdown-menu>li>a:focus {
    background-color: #3071a9;
}

.with-nav-tabs.panel-primary .nav-tabs>li.dropdown .dropdown-menu>.active>a,
.with-nav-tabs.panel-primary .nav-tabs>li.dropdown .dropdown-menu>.active>a:hover,
.with-nav-tabs.panel-primary .nav-tabs>li.dropdown .dropdown-menu>.active>a:focus {
    background-color: #4a9fe9;
}

/********************************************************************/
/*** PANEL SUCCESS ***/
.with-nav-tabs.panel-success .nav-tabs>li>a,
.with-nav-tabs.panel-success .nav-tabs>li>a:hover,
.with-nav-tabs.panel-success .nav-tabs>li>a:focus {
    color: #3c763d;
}

.with-nav-tabs.panel-success .nav-tabs>.open>a,
.with-nav-tabs.panel-success .nav-tabs>.open>a:hover,
.with-nav-tabs.panel-success .nav-tabs>.open>a:focus,
.with-nav-tabs.panel-success .nav-tabs>li>a:hover,
.with-nav-tabs.panel-success .nav-tabs>li>a:focus {
    color: #3c763d;
    background-color: #d6e9c6;
    border-color: transparent;
}

.with-nav-tabs.panel-success .nav-tabs>li.active>a,
.with-nav-tabs.panel-success .nav-tabs>li.active>a:hover,
.with-nav-tabs.panel-success .nav-tabs>li.active>a:focus {
    color: #3c763d;
    background-color: #fff;
    border-color: #d6e9c6;
    border-bottom-color: transparent;
}

.with-nav-tabs.panel-success .nav-tabs>li.dropdown .dropdown-menu {
    background-color: #dff0d8;
    border-color: #d6e9c6;
}

.with-nav-tabs.panel-success .nav-tabs>li.dropdown .dropdown-menu>li>a {
    color: #3c763d;
}

.with-nav-tabs.panel-success .nav-tabs>li.dropdown .dropdown-menu>li>a:hover,
.with-nav-tabs.panel-success .nav-tabs>li.dropdown .dropdown-menu>li>a:focus {
    background-color: #d6e9c6;
}

.with-nav-tabs.panel-success .nav-tabs>li.dropdown .dropdown-menu>.active>a,
.with-nav-tabs.panel-success .nav-tabs>li.dropdown .dropdown-menu>.active>a:hover,
.with-nav-tabs.panel-success .nav-tabs>li.dropdown .dropdown-menu>.active>a:focus {
    color: #fff;
    background-color: #3c763d;
}

/********************************************************************/
/*** PANEL INFO ***/
.with-nav-tabs.panel-info .nav-tabs>li>a,
.with-nav-tabs.panel-info .nav-tabs>li>a:hover,
.with-nav-tabs.panel-info .nav-tabs>li>a:focus {
    color: #31708f;
}

.with-nav-tabs.panel-info .nav-tabs>.open>a,
.with-nav-tabs.panel-info .nav-tabs>.open>a:hover,
.with-nav-tabs.panel-info .nav-tabs>.open>a:focus,
.with-nav-tabs.panel-info .nav-tabs>li>a:hover,
.with-nav-tabs.panel-info .nav-tabs>li>a:focus {
    color: #31708f;
    background-color: #bce8f1;
    border-color: transparent;
}

.with-nav-tabs.panel-info .nav-tabs>li.active>a,
.with-nav-tabs.panel-info .nav-tabs>li.active>a:hover,
.with-nav-tabs.panel-info .nav-tabs>li.active>a:focus {
    color: #31708f;
    background-color: #fff;
    border-color: #bce8f1;
    border-bottom-color: transparent;
}

.with-nav-tabs.panel-info .nav-tabs>li.dropdown .dropdown-menu {
    background-color: #d9edf7;
    border-color: #bce8f1;
}

.with-nav-tabs.panel-info .nav-tabs>li.dropdown .dropdown-menu>li>a {
    color: #31708f;
}

.with-nav-tabs.panel-info .nav-tabs>li.dropdown .dropdown-menu>li>a:hover,
.with-nav-tabs.panel-info .nav-tabs>li.dropdown .dropdown-menu>li>a:focus {
    background-color: #bce8f1;
}

.with-nav-tabs.panel-info .nav-tabs>li.dropdown .dropdown-menu>.active>a,
.with-nav-tabs.panel-info .nav-tabs>li.dropdown .dropdown-menu>.active>a:hover,
.with-nav-tabs.panel-info .nav-tabs>li.dropdown .dropdown-menu>.active>a:focus {
    color: #fff;
    background-color: #31708f;
}

/********************************************************************/
/*** PANEL WARNING ***/
.with-nav-tabs.panel-warning .nav-tabs>li>a,
.with-nav-tabs.panel-warning .nav-tabs>li>a:hover,
.with-nav-tabs.panel-warning .nav-tabs>li>a:focus {
    color: #8a6d3b;
}

.with-nav-tabs.panel-warning .nav-tabs>.open>a,
.with-nav-tabs.panel-warning .nav-tabs>.open>a:hover,
.with-nav-tabs.panel-warning .nav-tabs>.open>a:focus,
.with-nav-tabs.panel-warning .nav-tabs>li>a:hover,
.with-nav-tabs.panel-warning .nav-tabs>li>a:focus {
    color: #8a6d3b;
    background-color: #faebcc;
    border-color: transparent;
}

.with-nav-tabs.panel-warning .nav-tabs>li.active>a,
.with-nav-tabs.panel-warning .nav-tabs>li.active>a:hover,
.with-nav-tabs.panel-warning .nav-tabs>li.active>a:focus {
    color: #8a6d3b;
    background-color: #fff;
    border-color: #faebcc;
    border-bottom-color: transparent;
}

.with-nav-tabs.panel-warning .nav-tabs>li.dropdown .dropdown-menu {
    background-color: #fcf8e3;
    border-color: #faebcc;
}

.with-nav-tabs.panel-warning .nav-tabs>li.dropdown .dropdown-menu>li>a {
    color: #8a6d3b;
}

.with-nav-tabs.panel-warning .nav-tabs>li.dropdown .dropdown-menu>li>a:hover,
.with-nav-tabs.panel-warning .nav-tabs>li.dropdown .dropdown-menu>li>a:focus {
    background-color: #faebcc;
}

.with-nav-tabs.panel-warning .nav-tabs>li.dropdown .dropdown-menu>.active>a,
.with-nav-tabs.panel-warning .nav-tabs>li.dropdown .dropdown-menu>.active>a:hover,
.with-nav-tabs.panel-warning .nav-tabs>li.dropdown .dropdown-menu>.active>a:focus {
    color: #fff;
    background-color: #8a6d3b;
}

/********************************************************************/
/*** PANEL DANGER ***/
.with-nav-tabs.panel-danger .nav-tabs>li>a,
.with-nav-tabs.panel-danger .nav-tabs>li>a:hover,
.with-nav-tabs.panel-danger .nav-tabs>li>a:focus {
    color: #a94442;
}

.with-nav-tabs.panel-danger .nav-tabs>.open>a,
.with-nav-tabs.panel-danger .nav-tabs>.open>a:hover,
.with-nav-tabs.panel-danger .nav-tabs>.open>a:focus,
.with-nav-tabs.panel-danger .nav-tabs>li>a:hover,
.with-nav-tabs.panel-danger .nav-tabs>li>a:focus {
    color: #a94442;
    background-color: #ebccd1;
    border-color: transparent;
}

.with-nav-tabs.panel-danger .nav-tabs>li.active>a,
.with-nav-tabs.panel-danger .nav-tabs>li.active>a:hover,
.with-nav-tabs.panel-danger .nav-tabs>li.active>a:focus {
    color: #a94442;
    background-color: #fff;
    border-color: #ebccd1;
    border-bottom-color: transparent;
}

.with-nav-tabs.panel-danger .nav-tabs>li.dropdown .dropdown-menu {
    background-color: #f2dede;
    /* bg color */
    border-color: #ebccd1;
    /* border color */
}

.with-nav-tabs.panel-danger .nav-tabs>li.dropdown .dropdown-menu>li>a {
    color: #a94442;
    /* normal text color */
}

.with-nav-tabs.panel-danger .nav-tabs>li.dropdown .dropdown-menu>li>a:hover,
.with-nav-tabs.panel-danger .nav-tabs>li.dropdown .dropdown-menu>li>a:focus {
    background-color: #ebccd1;
    /* hover bg color */
}

.with-nav-tabs.panel-danger .nav-tabs>li.dropdown .dropdown-menu>.active>a,
.with-nav-tabs.panel-danger .nav-tabs>li.dropdown .dropdown-menu>.active>a:hover,
.with-nav-tabs.panel-danger .nav-tabs>li.dropdown .dropdown-menu>.active>a:focus {
    color: #fff;
    /* active text color */
    background-color: #a94442;
    /* active bg color */
}
</style>


<!--Banner de auto -->
<div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <BR>
                <BR>
                <BR>


            </div>
        </div>
    </div>
</div>
<!--Banner de auto -->


<div class="blog-page area-padding">
    <div class="container">
        <div class="row">
            <!-- End left sidebar -->
            <!-- Start single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">

                    <!-- SECTION -->
                    <div class="section">
                        <!-- container -->
                        <div class="container">
                            <!-- row -->
                            <div class="row">

                                <div class="container">
                                    <div class="page-header">
                                        <h1>Información Migratoria
                                        </h1>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel with-nav-tabs panel-default">
                                                <div class="panel-heading">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a href="#tab1default"
                                                                data-toggle="tab">Información Personal</a></li>
                                                        <li><a href="#tab2default" data-toggle="tab">Información de Viaje</a></li>
                                                        <li><a href="#tab3default" data-toggle="tab">Información Familiar</a></li>
                                                        <li><a href="#tab4default" data-toggle="tab">Formación Academica</a></li>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="tab1default">Default 1
                                                        </div>
                                                        <div class="tab-pane fade" id="tab2default">Default 2</div>
                                                        <div class="tab-pane fade" id="tab3default">Default 3</div>
                                                        <div class="tab-pane fade" id="tab4default">Default 4</div>
                                                        <div class="tab-pane fade" id="tab5default">Default 5</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

</script>



<?php 
include_once '../../plantilla/footer.php';
 ?>