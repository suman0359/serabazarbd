<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <span>Dashboard</span> <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../../index.html"> Dashboard v1</a></li>
                    <li><a href="../../index2.html"> Dashboard v2</a></li>
                </ul>
            </li>


            <?php 

            foreach ($sidebar_menu as $value) { ?>
                <li><a href="<?php echo base_url(); ?>"><?php echo $value->category_name; ?></a></li>
            <?php } ?>
            <!-- <li><a href="http://mudibazarbd.com/category/25/rice.html">Rice</a></li>
            <li><a href="http://mudibazarbd.com/category/12/atta-maida--suji.html">Atta Maida  Suji</a></li>
            <li><a href="http://mudibazarbd.com/category/24/dal-or-lentil.html">Dal or Lentil</a></li>
            <li><a href="http://mudibazarbd.com/category/23/oil.html">Oil</a></li>
            <li><a href="http://mudibazarbd.com/category/20/salt-&amp;-sugar.html">Salt &amp; Sugar</a></li>
            <li><a href="http://mudibazarbd.com/category/22/spices.html">Spices</a></li>
            <li><a href="http://mudibazarbd.com/category/13/egg.html">Egg</a></li>
            <li><a href="http://mudibazarbd.com/category/29/noodles-&amp;-pasta.html">Noodles &amp; Pasta</a></li>
            <li><a href="http://mudibazarbd.com/category/19/ready-mix.html">Ready Mix</a></li>
            <li><a href="http://mudibazarbd.com/category/14/milk.html">Milk</a></li>
            <li><a href="http://mudibazarbd.com/category/28/tea-&amp;-coffee.html">Tea &amp; Coffee</a></li>
            <li><a href="http://mudibazarbd.com/category/30/biscuit-breads-&amp;-cookies.html">Biscuit Breads &amp; Cookies</a></li>
            <li><a href="http://mudibazarbd.com/category/15/pickels.html">Pickels</a></li>
            <li><a href="http://mudibazarbd.com/category/17/ghee-butter-&amp;-cheese.html">Ghee Butter &amp; Cheese</a></li>
            <li><a href="http://mudibazarbd.com/category/33/syrups-&amp;-powder-drinks.html">Syrups &amp; Powder Drinks</a></li>
            <li><a href="http://mudibazarbd.com/category/34/juice.html">Juice</a></li>
            <li><a href="http://mudibazarbd.com/category/35/soft-drinks.html">Soft Drinks</a></li>
            <li><a href="http://mudibazarbd.com/category/36/water.html">Water</a></li>
            <li><a href="http://mudibazarbd.com/category/37/chips-&amp;-pretzels.html">Chips &amp; Pretzels</a></li>
            <li><a href="http://mudibazarbd.com/category/38/candy-&amp;-chocolates.html">Candy &amp; Chocolates</a></li>
            <li><a href="http://mudibazarbd.com/category/39/sauce.html">Sauce</a></li>
            <li><a href="http://mudibazarbd.com/category/40/deodorants.html">Deodorants</a></li>
            <li><a href="http://mudibazarbd.com/category/41/hair-oil.html">Hair Oil</a></li>
            <li><a href="http://mudibazarbd.com/category/42/shaving-care.html">Shaving Care</a></li>
            <li><a href="http://mudibazarbd.com/category/43/mouthwash.html">Mouthwash</a></li>
            <li><a href="http://mudibazarbd.com/category/44/skin-care.html">Skin Care</a></li>
            <li><a href="http://mudibazarbd.com/category/47/shampoo.html">Shampoo</a></li>
            <li><a href="http://mudibazarbd.com/category/45/soap.html">Soap</a></li>
            <li><a href="http://mudibazarbd.com/category/46/laundry-soap.html">Laundry Soap</a></li>
            <li><a href="http://mudibazarbd.com/category/48/air-fresheners.html">Air Fresheners</a></li>
            <li><a href="http://mudibazarbd.com/category/50/dish-wash.html">Dish wash</a></li>
            <li><a href="http://mudibazarbd.com/category/51/hand-wash.html">Hand wash</a></li>
            <li><a href="http://mudibazarbd.com/category/49/floor-&amp;-toilet-cleaning.html">Floor &amp; Toilet Cleaning</a></li>
            <li><a href="http://mudibazarbd.com/category/52/tissue-napkins-&amp;-diaper.html">Tissue Napkins &amp; Diaper</a></li>
            <li><a href="http://mudibazarbd.com/category/53/pest-control.html">Pest Control</a></li>
            <li><a href="http://mudibazarbd.com/category/26/others.html">Others</a></li>


 -->










            <li class="treeview">
                <a href="#">
                    <span>Layout Options</span>
                    <!-- <span class="label label-primary pull-right">4</span> -->
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>"> Top Navigation</a></li>
                    <li><a href="<?php echo base_url(); ?>"> Boxed</a></li>
                    <li><a href="<?php echo base_url(); ?>"> Fixed</a></li>
                    <li><a href="<?php echo base_url(); ?>"> Collapsed Sidebar</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>">
                  <!-- <span>Widgets</span> <small class="label pull-right bg-green">new</small> -->
                </a>
            </li>
            <li class="treeview">
                <a href="#">

                    <span>Charts</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>"> ChartJS</a></li>
                    <li><a href="<?php echo base_url(); ?>"> Morris</a></li>
                    <li><a href="<?php echo base_url(); ?>"> Flot</a></li>
                    <li><a href="<?php echo base_url(); ?>"> Inline charts</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <span>UI Elements</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>"> General</a></li>
                    <li><a href="<?php echo base_url(); ?>"> Icons</a></li>
                    <li><a href="<?php echo base_url(); ?>"> Buttons</a></li>
                    <li><a href="<?php echo base_url(); ?>"> Sliders</a></li>
                    <li><a href="<?php echo base_url(); ?>"> Timeline</a></li>
                    <li><a href="<?php echo base_url(); ?>"> Modals</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <span>Forms</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="general.html"> General Elements</a></li>
                    <li class=""><a href="advanced.html"> Advanced Elements</a></li>
                    <li><a href="editors.html"> Editors</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <span>Tables</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>"> Simple tables</a></li>
                    <li><a href="<?php echo base_url(); ?>"> Data tables</a></li>
                </ul>
            </li>
            <li>
                <a href="../calendar.html">
                    <span>Calendar</span>
                    <small class="label pull-right bg-red">3</small>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>">
                    <span>Mailbox</span>
                    <small class="label pull-right bg-yellow">12</small>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <span>Examples</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>"> Invoice</a></li>
                    <li><a href="<?php echo base_url(); ?>l"> Profile</a></li>
                    <li><a href="<?php echo base_url(); ?>"> Login</a></li>
                    <li><a href="<?php echo base_url(); ?>"> Register</a></li>
                    <li><a href="<?php echo base_url(); ?>"> Lockscreen</a></li>
                    <li><a href="<?php echo base_url(); ?>"> 404 Error</a></li>
                    <li><a href="<?php echo base_url(); ?>"> 500 Error</a></li>
                    <li><a href="<?php echo base_url(); ?>"> Blank Page</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <span>Multilevel</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"> Level One</a></li>
                    <li>
                        <a href="#"> Level One <i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"> Level Two</a></li>
                            <li>
                                <a href="#"> Level Two <i class="fa fa-angle-right pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="#"> Level Three</a></li>
                                    <li><a href="#"> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"> Level One</a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url(); ?>"><span>Documentation</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="#"> <span>Important</span></a></li>
            <li><a href="#"> <span>Warning</span></a></li>
            <li><a href="#"> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">