<?php

/* @User/main/main.html.twig */
class __TwigTemplate_37bfb0e79afa8a54ddcece97d7d6ae1351e06cc222eb6d1189ce463c7860355d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e43825737e64d10fa29fcf16c2bc2a835e8c17a02fc9b850352ab14fa45e673f = $this->env->getExtension("native_profiler");
        $__internal_e43825737e64d10fa29fcf16c2bc2a835e8c17a02fc9b850352ab14fa45e673f->enter($__internal_e43825737e64d10fa29fcf16c2bc2a835e8c17a02fc9b850352ab14fa45e673f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/main/main.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_e43825737e64d10fa29fcf16c2bc2a835e8c17a02fc9b850352ab14fa45e673f->leave($__internal_e43825737e64d10fa29fcf16c2bc2a835e8c17a02fc9b850352ab14fa45e673f_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_59fb3256dc54e7f98ebaa153d60999aba81f4130f155e8d905f25302931e7dcb = $this->env->getExtension("native_profiler");
        $__internal_59fb3256dc54e7f98ebaa153d60999aba81f4130f155e8d905f25302931e7dcb->enter($__internal_59fb3256dc54e7f98ebaa153d60999aba81f4130f155e8d905f25302931e7dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <style type=\"text/css\">
        .main {
            background-color: #F2F2F2;
        }

        .main-left {
            width: 19%;
            float: left;
            /*padding-left: 1%;*/
            /*padding-right: 1%;*/
            /*margin-left: 1%;*/
            margin-right: 1%;
        }

        .pagination-part {
            padding-left: 4%;
        }

        .main-center {
            background-color: white;
            /*margin-top: 10px;*/
            margin-bottom: 10px;
            width: 60%;
            float: left;
        }

        .main-right {
            width: 19%;
            float: right;
            /*padding-left: 1%;*/
            /*padding-right: 1%;*/
            margin-left: 1%;
            /*margin-right: 1%;*/
        }

        .panel-heading {
            text-align: center;
        }

        #container {
            overflow: auto;
        }

        div.form-search {
            padding-top: 3%;
            padding-left: 1%;
        }

        div.button-search {
            margin: auto;
            width: 20%;
            padding: 1%;
        }

        div.panel-primary {
            margin-bottom: 0px;
        }

    </style>
    <div id=\"wrapper\">
        <div id=\"container\">
            ";
        // line 66
        echo "            ";
        $this->loadTemplate("header.html.twig", "@User/main/main.html.twig", 66)->display($context);
        // line 67
        echo "            ";
        // line 68
        echo "            <div id=\"wrapper\">
                <div class=\"container\">
                    <div class=\"row main\">
                        <div class=\"main-left\">
                            <div class=\"panel panel-primary panel-config\">
                                <div class=\"panel-heading\">DANH SÁCH HÃNG XE</div>
                                <div class=\"brands\">
                                    <ul class=\"list-group\">
                                        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brs"]) ? $context["brs"] : $this->getContext($context, "brs")));
        foreach ($context['_seq'] as $context["_key"] => $context["pagi"]) {
            // line 77
            echo "                                            <li class=\"list-group-item\"><a
                                                        href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("get_data_search");
            echo "?brand=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pagi"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pagi"], "name", array()), "html", null, true);
            echo "</a>
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"main-center\">
                            <div class=\"panel panel-primary\">
                                <div class=\"panel-heading\">HỆ THỐNG TIN TỨC MUA BÁN Ô TÔ UY TÍN NHẤT VIẾT NAM</div>
                                <div class=\"form-search\">
                                    <form action=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("get_data_search");
        echo "\" method=\"get\">
                                        <div class=\"search-op\">
                                            <label>Hãng xe:</label>
                                            <select name=\"brand\">
                                                <option value=\"\" selected></option>
                                                ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brands"]) ? $context["brands"] : $this->getContext($context, "brands")));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 95
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "name", array()), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                                            </select>
                                            <label>Trạng thái:</label>
                                            <select name=\"status\">
                                                <option value=\"\" selected></option>
                                                <option value=\"Xe cũ\">Xe cũ</option>
                                                <option value=\"Xe mới\">Xe mới</option>
                                            </select>
                                            <label>Năm mua:</label>
                                            <select name=\"year\">
                                                <option value=\"\" selected></option>
                                                ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1970, 2017));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 108
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                                            </select>
                                            <label>Giá:</label>
                                            <select name=\"price\">
                                                <option value=\"\" selected></option>
                                                <option value=\"10000\"><10000\$</option>
                                                <option value=\"20000\"><20000\$</option>
                                                <option value=\"50000\"><50000\$</option>
                                                <option value=\"100000\"><100000\$</option>
                                                <option value=\"200000\"><200000\$</option>
                                                <option value=\"300000\"><300000\$</option>
                                                <option value=\"500000\">>300000\$</option>
                                            </select>
                                            <br>
                                            <label>Tỉnh:</label>
                                            <input type=\"text\" name=\"city\">
                                        </div>
                                        <div class=\"button-search\">
                                            <label>
                                                <button type=\"submit\" class=\"btn btn-primary\"><span
                                                            class=\"glyphicon glyphicon-search\"></span>
                                                    Tìm kiếm
                                                </button>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <div class=\"count\">
                                    <i>
                                        Trang";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["pageRequest"]) ? $context["pageRequest"] : $this->getContext($context, "pageRequest")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pageCount", array()), "html", null, true);
        echo "
                                        (Tổng ";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo " tin mua).
                                    </i>
                                </div>
                                <div class=\"pagi-top navigation\">
                                    ";
        // line 143
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                                </div>
                                <div class=\"table-pos\">
                                    <table class=\"table-responsive table-striped table-bordered \">
                                        <tr>
                                            ";
        // line 149
        echo "                                            <th class=\"table-header tbl-code\">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Mã Tin", "a.Id");
        echo "</th>
                                            <th class=\"table-header\">";
        // line 150
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Hình ảnh", "a.Id");
        echo "</th>
                                            <th class=\"table-header\">";
        // line 151
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Trạng thái", "a.Id");
        echo "</th>
                                            <th class=\"table-header\">";
        // line 152
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Chi tiết", "a.Id");
        echo "</th>
                                            <th class=\"table-header\">";
        // line 153
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Giá", "a.Id");
        echo "</th>
                                            <th class=\"table-header\">";
        // line 154
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Liên hệ", "a.Id");
        echo "</th>
                                            <th class=\"table-header\">";
        // line 155
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Tỉnh", "a.Id");
        echo "</th>
                                        </tr>

                                        ";
        // line 159
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 160
            echo "                                            <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                                                <td class=\"table-content\">";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "code", array()), "html", null, true);
            echo "</td>
                                                <td class=\"table-content\">";
            // line 162
            echo $this->getAttribute($context["article"], "imageLink", array());
            echo "</td>
                                                <td class=\"table-content status\">";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "status", array()), "html", null, true);
            echo "</td>
                                                <td class=\"table-content info main-info\">";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "info", array()), "html", null, true);
            echo "</td>
                                                <td class=\"table-content price\">";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "price", array()), "html", null, true);
            echo "</td>
                                                ";
            // line 166
            if (($this->getAttribute($this->getAttribute($context["article"], "shopId", array()), "id", array()) == 0)) {
                // line 167
                echo "                                                    <td class=\"table-content main-contact\"><b>Liên
                                                            hệ:</b><br>";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "userId", array()), "usernameCanonical", array()), "html", null, true);
                echo "<br><b>Địa
                                                            chỉ:</b><br>";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "userId", array()), "address", array()), "html", null, true);
                echo "
                                                        <br><b>ĐT:</b><br>";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "userId", array()), "phone", array()), "html", null, true);
                echo "<br></td>
                                                    <td class=\"table-content city\">";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "city", array()), "html", null, true);
                echo "</td>
                                                ";
            } else {
                // line 173
                echo "                                                    <td class=\"table-content main-contact\"><b>Liên
                                                            hệ:</b><br>";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "shopId", array()), "name", array()), "html", null, true);
                echo "<br><b>Địa
                                                            chỉ:</b><br>";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "shopId", array()), "address", array()), "html", null, true);
                echo "
                                                        <br><b>ĐT:</b><br>";
                // line 176
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "shopId", array()), "phone", array()), "html", null, true);
                echo "<br></td>
                                                    <td class=\"table-content city\"></td>
                                                ";
            }
            // line 179
            echo "                                            </tr>
                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "                                    </table>
                                </div>
                                ";
        // line 184
        echo "                                <div class=\"pagi-top navigation\">
                                    ";
        // line 185
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"main-right\">
                            <div class=\"panel panel-primary panel-config\">
                                <div class=\"panel-heading\">LIÊN HỆ</div>
                                <div class=\"panel-group\" id=\"accordion\">
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\">
                                            <h4 class=\"panel-title\">
                                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse1\">Sứ
                                                    mệnh</a>
                                            </h4>
                                        </div>
                                        <div id=\"collapse1\" class=\"panel-collapse collapse in\">
                                            <div class=\"panel-body\">Được khởi đầu từ giữa năm 2016, MobiHome.com ra đời
                                                với mong muốn trở thành cầu nối đưa những thông tin của người mua và
                                                người bán ô tô đến gần nhau hơn..
                                                MobiHome.com với mục tiêu: “Là nơi chia sẻ thông tin giữa người mua và
                                                người bán ô tô. Kết nối những đam mê đằng sau tay lái giữa những người
                                                bạn.”
                                                Thân.
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\">
                                            <h4 class=\"panel-title\">
                                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse2\">Đăng
                                                    tin bán xe</a>
                                            </h4>
                                        </div>
                                        <div id=\"collapse2\" class=\"panel-collapse collapse\">
                                            <div class=\"panel-body\">Cho phép bạn dễ dàng đăng tin bán xe lên
                                                hệ thống. Xe của bạn sẽ nhanh chóng được bán thông qua thông tin quảng
                                                bá trên kênh rộng rãi.
                                                ";
        // line 222
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 223
            echo "                                                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("up_sell_news");
            echo "\">Đăng tin bán xe</a>
                                                ";
        } else {
            // line 225
            echo "                                                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Đăng tin bán
                                                        xe</a>
                                                ";
        }
        // line 228
        echo "                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\">
                                            <h4 class=\"panel-title\">
                                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse3\">Đăng
                                                    tin mua xe</a>
                                            </h4>
                                        </div>
                                        <div id=\"collapse3\" class=\"panel-collapse collapse\">
                                            <div class=\"panel-body\">Cho phép bạn dễ dàng đăng tin mua xe lên
                                                bonbanh.com. Các nhà cung cấp sẽ nhanh chóng liên hệ với bạn .
                                                ";
        // line 241
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 242
            echo "                                                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("up_buy_news");
            echo "\">Đăng tin mua xe</a>
                                                ";
        } else {
            // line 244
            echo "                                                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Đăng tin mua
                                                        xe</a>
                                                ";
        }
        // line 247
        echo "                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\">
                                            <h4 class=\"panel-title\">
                                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse4\">Hệ
                                                    thống Salon</a>
                                            </h4>
                                        </div>
                                        <div id=\"collapse4\" class=\"panel-collapse collapse\">
                                            <div class=\"panel-body\">Tại MobiHome.com các thông tin về salon ô tô được
                                                cập
                                                nhật đầy đủ và phong phú.
                                                <a href=\"";
        // line 262
        echo $this->env->getExtension('routing')->getPath("salon_list");
        echo "\"> Tìm salon</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\">
                                            <h4 class=\"panel-title\">
                                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse5\">Hệ
                                                    thống tin tức</a>
                                            </h4>
                                        </div>
                                        <div id=\"collapse5\" class=\"panel-collapse collapse\">
                                            <div class=\"panel-body\">Tìm kiếm thông tin mua/ bán trên website dễ dàng!
                                                <a href=\"";
        // line 276
        echo $this->env->getExtension('routing')->getPath("sell_news");
        echo "\">Tìm xe đăng bán</a>
                                                <a href=\"";
        // line 277
        echo $this->env->getExtension('routing')->getPath("buy_news");
        echo "\">Tìm người mua xe</a>
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
    ";
        // line 289
        $this->loadTemplate("footer.html.twig", "@User/main/main.html.twig", 289)->display($context);
        
        $__internal_59fb3256dc54e7f98ebaa153d60999aba81f4130f155e8d905f25302931e7dcb->leave($__internal_59fb3256dc54e7f98ebaa153d60999aba81f4130f155e8d905f25302931e7dcb_prof);

    }

    public function getTemplateName()
    {
        return "@User/main/main.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  522 => 289,  507 => 277,  503 => 276,  486 => 262,  469 => 247,  462 => 244,  456 => 242,  454 => 241,  439 => 228,  432 => 225,  426 => 223,  424 => 222,  384 => 185,  381 => 184,  377 => 181,  362 => 179,  356 => 176,  352 => 175,  348 => 174,  345 => 173,  340 => 171,  336 => 170,  332 => 169,  328 => 168,  325 => 167,  323 => 166,  319 => 165,  315 => 164,  311 => 163,  307 => 162,  303 => 161,  296 => 160,  278 => 159,  272 => 155,  268 => 154,  264 => 153,  260 => 152,  256 => 151,  252 => 150,  247 => 149,  239 => 143,  232 => 139,  226 => 138,  196 => 110,  185 => 108,  181 => 107,  169 => 97,  158 => 95,  154 => 94,  146 => 89,  136 => 81,  123 => 78,  120 => 77,  116 => 76,  106 => 68,  104 => 67,  101 => 66,  38 => 4,  26 => 3,  23 => 2,);
    }
}
/* {#{% extends 'base.html.twig' %}#}*/
/* */
/* {% block body %}*/
/*     <style type="text/css">*/
/*         .main {*/
/*             background-color: #F2F2F2;*/
/*         }*/
/* */
/*         .main-left {*/
/*             width: 19%;*/
/*             float: left;*/
/*             /*padding-left: 1%;*//* */
/*             /*padding-right: 1%;*//* */
/*             /*margin-left: 1%;*//* */
/*             margin-right: 1%;*/
/*         }*/
/* */
/*         .pagination-part {*/
/*             padding-left: 4%;*/
/*         }*/
/* */
/*         .main-center {*/
/*             background-color: white;*/
/*             /*margin-top: 10px;*//* */
/*             margin-bottom: 10px;*/
/*             width: 60%;*/
/*             float: left;*/
/*         }*/
/* */
/*         .main-right {*/
/*             width: 19%;*/
/*             float: right;*/
/*             /*padding-left: 1%;*//* */
/*             /*padding-right: 1%;*//* */
/*             margin-left: 1%;*/
/*             /*margin-right: 1%;*//* */
/*         }*/
/* */
/*         .panel-heading {*/
/*             text-align: center;*/
/*         }*/
/* */
/*         #container {*/
/*             overflow: auto;*/
/*         }*/
/* */
/*         div.form-search {*/
/*             padding-top: 3%;*/
/*             padding-left: 1%;*/
/*         }*/
/* */
/*         div.button-search {*/
/*             margin: auto;*/
/*             width: 20%;*/
/*             padding: 1%;*/
/*         }*/
/* */
/*         div.panel-primary {*/
/*             margin-bottom: 0px;*/
/*         }*/
/* */
/*     </style>*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             {#header#}*/
/*             {% include('header.html.twig') %}*/
/*             {#end header#}*/
/*             <div id="wrapper">*/
/*                 <div class="container">*/
/*                     <div class="row main">*/
/*                         <div class="main-left">*/
/*                             <div class="panel panel-primary panel-config">*/
/*                                 <div class="panel-heading">DANH SÁCH HÃNG XE</div>*/
/*                                 <div class="brands">*/
/*                                     <ul class="list-group">*/
/*                                         {% for pagi in brs %}*/
/*                                             <li class="list-group-item"><a*/
/*                                                         href="{{ path('get_data_search') }}?brand={{ pagi.id }}">{{ pagi.name }}</a>*/
/*                                             </li>*/
/*                                         {% endfor %}*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="main-center">*/
/*                             <div class="panel panel-primary">*/
/*                                 <div class="panel-heading">HỆ THỐNG TIN TỨC MUA BÁN Ô TÔ UY TÍN NHẤT VIẾT NAM</div>*/
/*                                 <div class="form-search">*/
/*                                     <form action="{{ path('get_data_search') }}" method="get">*/
/*                                         <div class="search-op">*/
/*                                             <label>Hãng xe:</label>*/
/*                                             <select name="brand">*/
/*                                                 <option value="" selected></option>*/
/*                                                 {% for brand in brands %}*/
/*                                                     <option value="{{ brand.id }}">{{ brand.name }}</option>*/
/*                                                 {% endfor %}*/
/*                                             </select>*/
/*                                             <label>Trạng thái:</label>*/
/*                                             <select name="status">*/
/*                                                 <option value="" selected></option>*/
/*                                                 <option value="Xe cũ">Xe cũ</option>*/
/*                                                 <option value="Xe mới">Xe mới</option>*/
/*                                             </select>*/
/*                                             <label>Năm mua:</label>*/
/*                                             <select name="year">*/
/*                                                 <option value="" selected></option>*/
/*                                                 {% for i in 1970..2017 %}*/
/*                                                     <option value="{{ i }}">{{ i }}</option>*/
/*                                                 {% endfor %}*/
/*                                             </select>*/
/*                                             <label>Giá:</label>*/
/*                                             <select name="price">*/
/*                                                 <option value="" selected></option>*/
/*                                                 <option value="10000"><10000$</option>*/
/*                                                 <option value="20000"><20000$</option>*/
/*                                                 <option value="50000"><50000$</option>*/
/*                                                 <option value="100000"><100000$</option>*/
/*                                                 <option value="200000"><200000$</option>*/
/*                                                 <option value="300000"><300000$</option>*/
/*                                                 <option value="500000">>300000$</option>*/
/*                                             </select>*/
/*                                             <br>*/
/*                                             <label>Tỉnh:</label>*/
/*                                             <input type="text" name="city">*/
/*                                         </div>*/
/*                                         <div class="button-search">*/
/*                                             <label>*/
/*                                                 <button type="submit" class="btn btn-primary"><span*/
/*                                                             class="glyphicon glyphicon-search"></span>*/
/*                                                     Tìm kiếm*/
/*                                                 </button>*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </form>*/
/*                                 </div>*/
/*                                 <div class="count">*/
/*                                     <i>*/
/*                                         Trang{{ pageRequest }}/{{ pagination.pageCount }}*/
/*                                         (Tổng {{ pagination.getTotalItemCount }} tin mua).*/
/*                                     </i>*/
/*                                 </div>*/
/*                                 <div class="pagi-top navigation">*/
/*                                     {{ knp_pagination_render(pagination) }}*/
/*                                 </div>*/
/*                                 <div class="table-pos">*/
/*                                     <table class="table-responsive table-striped table-bordered ">*/
/*                                         <tr>*/
/*                                             {# sorting of properties based on query components #}*/
/*                                             <th class="table-header tbl-code">{{ knp_pagination_sortable(pagination, 'Mã Tin', 'a.Id') }}</th>*/
/*                                             <th class="table-header">{{ knp_pagination_sortable(pagination, 'Hình ảnh', 'a.Id') }}</th>*/
/*                                             <th class="table-header">{{ knp_pagination_sortable(pagination, 'Trạng thái', 'a.Id') }}</th>*/
/*                                             <th class="table-header">{{ knp_pagination_sortable(pagination, 'Chi tiết', 'a.Id') }}</th>*/
/*                                             <th class="table-header">{{ knp_pagination_sortable(pagination, 'Giá', 'a.Id') }}</th>*/
/*                                             <th class="table-header">{{ knp_pagination_sortable(pagination, 'Liên hệ', 'a.Id') }}</th>*/
/*                                             <th class="table-header">{{ knp_pagination_sortable(pagination, 'Tỉnh', 'a.Id') }}</th>*/
/*                                         </tr>*/
/* */
/*                                         {# table body #}*/
/*                                         {% for article in pagination %}*/
/*                                             <tr {% if loop.index is odd %}class="color"{% endif %}>*/
/*                                                 <td class="table-content">{{ article.code }}</td>*/
/*                                                 <td class="table-content">{{ article.imageLink|raw }}</td>*/
/*                                                 <td class="table-content status">{{ article.status }}</td>*/
/*                                                 <td class="table-content info main-info">{{ article.info }}</td>*/
/*                                                 <td class="table-content price">{{ article.price }}</td>*/
/*                                                 {% if article.shopId.id == 0 %}*/
/*                                                     <td class="table-content main-contact"><b>Liên*/
/*                                                             hệ:</b><br>{{ article.userId.usernameCanonical }}<br><b>Địa*/
/*                                                             chỉ:</b><br>{{ article.userId.address }}*/
/*                                                         <br><b>ĐT:</b><br>{{ article.userId.phone }}<br></td>*/
/*                                                     <td class="table-content city">{{ article.city }}</td>*/
/*                                                 {% else %}*/
/*                                                     <td class="table-content main-contact"><b>Liên*/
/*                                                             hệ:</b><br>{{ article.shopId.name }}<br><b>Địa*/
/*                                                             chỉ:</b><br>{{ article.shopId.address }}*/
/*                                                         <br><b>ĐT:</b><br>{{ article.shopId.phone }}<br></td>*/
/*                                                     <td class="table-content city"></td>*/
/*                                                 {% endif %}*/
/*                                             </tr>*/
/*                                         {% endfor %}*/
/*                                     </table>*/
/*                                 </div>*/
/*                                 {# display navigation #}*/
/*                                 <div class="pagi-top navigation">*/
/*                                     {{ knp_pagination_render(pagination) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="main-right">*/
/*                             <div class="panel panel-primary panel-config">*/
/*                                 <div class="panel-heading">LIÊN HỆ</div>*/
/*                                 <div class="panel-group" id="accordion">*/
/*                                     <div class="panel panel-default">*/
/*                                         <div class="panel-heading">*/
/*                                             <h4 class="panel-title">*/
/*                                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Sứ*/
/*                                                     mệnh</a>*/
/*                                             </h4>*/
/*                                         </div>*/
/*                                         <div id="collapse1" class="panel-collapse collapse in">*/
/*                                             <div class="panel-body">Được khởi đầu từ giữa năm 2016, MobiHome.com ra đời*/
/*                                                 với mong muốn trở thành cầu nối đưa những thông tin của người mua và*/
/*                                                 người bán ô tô đến gần nhau hơn..*/
/*                                                 MobiHome.com với mục tiêu: “Là nơi chia sẻ thông tin giữa người mua và*/
/*                                                 người bán ô tô. Kết nối những đam mê đằng sau tay lái giữa những người*/
/*                                                 bạn.”*/
/*                                                 Thân.*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="panel panel-default">*/
/*                                         <div class="panel-heading">*/
/*                                             <h4 class="panel-title">*/
/*                                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Đăng*/
/*                                                     tin bán xe</a>*/
/*                                             </h4>*/
/*                                         </div>*/
/*                                         <div id="collapse2" class="panel-collapse collapse">*/
/*                                             <div class="panel-body">Cho phép bạn dễ dàng đăng tin bán xe lên*/
/*                                                 hệ thống. Xe của bạn sẽ nhanh chóng được bán thông qua thông tin quảng*/
/*                                                 bá trên kênh rộng rãi.*/
/*                                                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                                                     <a href="{{ path('up_sell_news') }}">Đăng tin bán xe</a>*/
/*                                                 {% else %}*/
/*                                                     <a href="{{ path('fos_user_security_login') }}">Đăng tin bán*/
/*                                                         xe</a>*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="panel panel-default">*/
/*                                         <div class="panel-heading">*/
/*                                             <h4 class="panel-title">*/
/*                                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Đăng*/
/*                                                     tin mua xe</a>*/
/*                                             </h4>*/
/*                                         </div>*/
/*                                         <div id="collapse3" class="panel-collapse collapse">*/
/*                                             <div class="panel-body">Cho phép bạn dễ dàng đăng tin mua xe lên*/
/*                                                 bonbanh.com. Các nhà cung cấp sẽ nhanh chóng liên hệ với bạn .*/
/*                                                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                                                     <a href="{{ path('up_buy_news') }}">Đăng tin mua xe</a>*/
/*                                                 {% else %}*/
/*                                                     <a href="{{ path('fos_user_security_login') }}">Đăng tin mua*/
/*                                                         xe</a>*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="panel panel-default">*/
/*                                         <div class="panel-heading">*/
/*                                             <h4 class="panel-title">*/
/*                                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Hệ*/
/*                                                     thống Salon</a>*/
/*                                             </h4>*/
/*                                         </div>*/
/*                                         <div id="collapse4" class="panel-collapse collapse">*/
/*                                             <div class="panel-body">Tại MobiHome.com các thông tin về salon ô tô được*/
/*                                                 cập*/
/*                                                 nhật đầy đủ và phong phú.*/
/*                                                 <a href="{{ path('salon_list') }}"> Tìm salon</a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="panel panel-default">*/
/*                                         <div class="panel-heading">*/
/*                                             <h4 class="panel-title">*/
/*                                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Hệ*/
/*                                                     thống tin tức</a>*/
/*                                             </h4>*/
/*                                         </div>*/
/*                                         <div id="collapse5" class="panel-collapse collapse">*/
/*                                             <div class="panel-body">Tìm kiếm thông tin mua/ bán trên website dễ dàng!*/
/*                                                 <a href="{{ path('sell_news') }}">Tìm xe đăng bán</a>*/
/*                                                 <a href="{{ path('buy_news') }}">Tìm người mua xe</a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% include('footer.html.twig') %}*/
/* {% endblock %}*/
