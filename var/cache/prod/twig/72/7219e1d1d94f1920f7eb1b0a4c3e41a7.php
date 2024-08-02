<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_8be99fedf04d5b057c9883f421f4e4c1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>SB Admin 2 - Border Utilities</title>

    <!-- Custom fonts for this template-->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/@fortawesome/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body id=\"page-top\">

<!-- Page Wrapper -->
<div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

        <!-- Sidebar - Brand -->
        <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
            <div class=\"sidebar-brand-icon rotate-n-15\">
                <i class=\"fas fa-laugh-wink\"></i>
            </div>
            <div class=\"sidebar-brand-text mx-3\">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class=\"sidebar-divider my-0\">

        <!-- Nav Item - Dashboard -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"index.html\">
                <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->
        <div class=\"sidebar-heading\">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                <i class=\"fas fa-fw fa-cog\"></i>
                <span>Components</span>
            </a>
            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Custom Components:</h6>
                    <a class=\"collapse-item\" href=\"buttons.html\">Buttons</a>
                    <a class=\"collapse-item\" href=\"cards.html\">Cards</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\" aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                <i class=\"fas fa-fw fa-wrench\"></i>
                <span>Utilities</span>
            </a>
            <div id=\"collapseUtilities\" class=\"collapse show\" aria-labelledby=\"headingUtilities\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Custom Utilities:</h6>
                    <a class=\"collapse-item\" href=\"utilities-color.html\">Colors</a>
                    <a class=\"collapse-item active\" href=\"utilities-border.html\">Borders</a>
                    <a class=\"collapse-item\" href=\"utilities-animation.html\">Animations</a>
                    <a class=\"collapse-item\" href=\"utilities-other.html\">Other</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider\">

        <!-- Heading -->
        <div class=\"sidebar-heading\">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
                <i class=\"fas fa-fw fa-folder\"></i>
                <span>Pages</span>
            </a>
            <div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                <div class=\"bg-white py-2 collapse-inner rounded\">
                    <h6 class=\"collapse-header\">Login Screens:</h6>
                    <a class=\"collapse-item\" href=\"login.html\">Login</a>
                    <a class=\"collapse-item\" href=\"register.html\">Register</a>
                    <a class=\"collapse-item\" href=\"forgot-password.html\">Forgot Password</a>
                    <div class=\"collapse-divider\"></div>
                    <h6 class=\"collapse-header\">Other Pages:</h6>
                    <a class=\"collapse-item\" href=\"404.html\">404 Page</a>
                    <a class=\"collapse-item\" href=\"blank.html\">Blank Page</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Charts -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"charts.html\">
                <i class=\"fas fa-fw fa-chart-area\"></i>
                <span>Charts</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"tables.html\">
                <i class=\"fas fa-fw fa-table\"></i>
                <span>Tables</span></a>
        </li>

        <!-- Divider -->
        <hr class=\"sidebar-divider d-none d-md-block\">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class=\"text-center d-none d-md-inline\">
            <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

        <!-- Main Content -->
        <div id=\"content\">

            <!-- Topbar -->
            <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                <!-- Sidebar Toggle (Topbar) -->
                <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                    <i class=\"fa fa-bars\"></i>
                </button>

                <!-- Topbar Search -->
                <form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-primary\" type=\"button\">
                                <i class=\"fas fa-search fa-sm\"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class=\"navbar-nav ml-auto\">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class=\"nav-item dropdown no-arrow d-sm-none\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-search fa-fw\"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
                            <form class=\"form-inline mr-auto w-100 navbar-search\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                                    <div class=\"input-group-append\">
                                        <button class=\"btn btn-primary\" type=\"button\">
                                            <i class=\"fas fa-search fa-sm\"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class=\"nav-item dropdown no-arrow mx-1\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-bell fa-fw\"></i>
                            <!-- Counter - Alerts -->
                            <span class=\"badge badge-danger badge-counter\">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"alertsDropdown\">
                            <h6 class=\"dropdown-header\">
                                Alerts Center
                            </h6>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"mr-3\">
                                    <div class=\"icon-circle bg-primary\">
                                        <i class=\"fas fa-file-alt text-white\"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"small text-gray-500\">December 12, 2019</div>
                                    <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"mr-3\">
                                    <div class=\"icon-circle bg-success\">
                                        <i class=\"fas fa-donate text-white\"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"small text-gray-500\">December 7, 2019</div>
                                    \$290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"mr-3\">
                                    <div class=\"icon-circle bg-warning\">
                                        <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"small text-gray-500\">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class=\"nav-item dropdown no-arrow mx-1\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-envelope fa-fw\"></i>
                            <!-- Counter - Messages -->
                            <span class=\"badge badge-danger badge-counter\">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"messagesDropdown\">
                            <h6 class=\"dropdown-header\">
                                Message Center
                            </h6>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/fn_BT9fwg_E/60x60\" alt=\"\">
                                    <div class=\"status-indicator bg-success\"></div>
                                </div>
                                <div class=\"font-weight-bold\">
                                    <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                    <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/AU4VPcFN4LE/60x60\" alt=\"\">
                                    <div class=\"status-indicator\"></div>
                                </div>
                                <div>
                                    <div class=\"text-truncate\">I have the photos that you ordered last month, how would you like them sent to you?</div>
                                    <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/CS2uCrpNzJY/60x60\" alt=\"\">
                                    <div class=\"status-indicator bg-warning\"></div>
                                </div>
                                <div>
                                    <div class=\"text-truncate\">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                                    <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                <div class=\"dropdown-list-image mr-3\">
                                    <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\" alt=\"\">
                                    <div class=\"status-indicator bg-success\"></div>
                                </div>
                                <div>
                                    <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                        </div>
                    </li>

                    <div class=\"topbar-divider d-none d-sm-block\"></div>

                    <!-- Nav Item - User Information -->
                    <li class=\"nav-item dropdown no-arrow\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Valerie Luna</span>
                            <img class=\"img-profile rounded-circle\" src=\"https://source.unsplash.com/QAB-WJcbgJk/60x60\">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Profile
                            </a>
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Settings
                            </a>
                            <a class=\"dropdown-item\" href=\"#\">
                                <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Activity Log
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class=\"container-fluid\">

                <!-- Page Heading -->
                <h1 class=\"h3 mb-1 text-gray-800\">Border Utilities</h1>
                <p class=\"mb-4\">Bootstrap's default utility classes can be found on the official <a href=\"https://getbootstrap.com/docs\">Bootstrap Documentation</a> page. The custom utilities below were created to extend this theme past the default utility classes built into Bootstrap's framework.</p>

                <!-- Content Row -->
                <div class=\"row\">

                    <!-- Border Left Utilities -->
                    <div class=\"col-lg-6\">

                        <div class=\"card mb-4 py-3 border-left-primary\">
                            <div class=\"card-body\">
                                .border-left-primary
                            </div>
                        </div>

                        <div class=\"card mb-4 py-3 border-left-success\">
                            <div class=\"card-body\">
                                .border-left-success
                            </div>
                        </div>

                        <div class=\"card mb-4 py-3 border-left-info\">
                            <div class=\"card-body\">
                                .border-left-info
                            </div>
                        </div>

                        <div class=\"card mb-4 py-3 border-left-warning\">
                            <div class=\"card-body\">
                                .border-left-warning
                            </div>
                        </div>

                        <div class=\"card mb-4 py-3 border-left-danger\">
                            <div class=\"card-body\">
                                .border-left-danger
                            </div>
                        </div>

                    </div>

                    <!-- Border Bottom Utilities -->
                    <div class=\"col-lg-6\">

                        <div class=\"card mb-4 py-3 border-bottom-primary\">
                            <div class=\"card-body\">
                                .border-bottom-primary
                            </div>
                        </div>

                        <div class=\"card mb-4 py-3 border-bottom-success\">
                            <div class=\"card-body\">
                                .border-bottom-success
                            </div>
                        </div>

                        <div class=\"card mb-4 py-3 border-bottom-info\">
                            <div class=\"card-body\">
                                .border-bottom-info
                            </div>
                        </div>

                        <div class=\"card mb-4 py-3 border-bottom-warning\">
                            <div class=\"card-body\">
                                .border-bottom-warning
                            </div>
                        </div>

                        <div class=\"card mb-4 py-3 border-bottom-danger\">
                            <div class=\"card-body\">
                                .border-bottom-danger
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class=\"sticky-footer bg-white\">
            <div class=\"container my-auto\">
                <div class=\"copyright text-center my-auto\">
                    <span>Copyright &copy; Your Website 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
</a>

<!-- Logout Modal-->
<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        echo "vendor/jquery/jquery.min.js\"></script>


<!-- Core plugin JavaScript-->
<script src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>

<!-- Custom scripts for all pages-->
<script src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  517 => 467,  511 => 464,  504 => 460,  60 => 19,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "C:\\xampp\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\home\\index.html.twig");
    }
}
