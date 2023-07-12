<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<div class="header">
            <div class="top-toolbar"><!--header toolbar-->
                <div class="container">
                    <div class="row">
                       
                        <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                            <div class="top-contact-info">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--header toolbar end-->
            <div class="nav-wrapper"><!--main navigation-->
                <div class="container">
                    <!--Main Menu HTML Code-->
                    <nav class="wsmenu slideLeft clearfix">
                        <div class="logo pull-left"><a href="index.php" title="Responsive Slide Menus"><h3 style="color:#08c2f3">Work-Force</h3></a></div>
                        <ul class="mobile-sub wsmenu-list pull-right">
                            <li><a href="indexe.php" class="">Inicio</a>
                        
                          <li><a href="contacto.php">Contacto <span class="arrow"></span></a></li>

                          <li><a href="logout">Cerrar Sesión <span class="arrow"></span></a></li>  
                          
                          <li><a href="perfil.php">Editar perfil <span class="arrow"></span></a></li>
                        </ul>
                    </nav>
                </div>
            </div><!--main navigation end-->