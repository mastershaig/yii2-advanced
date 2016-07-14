<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header id="header" class="site-header wide" role="banner">
    <div id="static-area-header-top" class="header-top static-area"><div class="container"><div class="row"><div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 static-social-follow"><h3 class="cherry-follow_title">Follow Us</h3><div id='cherry-follow-items-1' class='cherry-follow_wrap '><ul class='cherry-follow_list clearfix'><li class="cherry-follow_item twitter-item"><a class="cherry-follow_link" href="#" target="_blank" rel="nofollow" title="Twitter"><i class='fa fa-twitter'></i><span class="cherry-follow_label">Twitter</span></a></li><li class="cherry-follow_item facebook-item"><a class="cherry-follow_link" href="#" target="_blank" rel="nofollow" title="Facebook"><i class='fa fa-facebook-square'></i><span class="cherry-follow_label">Facebook</span></a></li><li class="cherry-follow_item linkedin-item"><a class="cherry-follow_link" href="#" target="_blank" rel="nofollow" title="LinkedIn"><i class='fa fa-linkedin'></i><span class="cherry-follow_label">LinkedIn</span></a></li><li class="cherry-follow_item google-item"><a class="cherry-follow_link" href="#" target="_blank" rel="nofollow" title="Google+"><i class='fa fa-google-plus-square'></i><span class="cherry-follow_label">Google+</span></a></li></ul></div></div><div class="col-xs-12 col-sm-6 col-md-9 col-lg-9 static-header-sidebar"><div class="sidebar-header widget-area" role="complementary"><aside id="text-2" class="widget widget_text">			<div class="textwidget"><div class="h_phone"><span class="fa fa-phone"></span> <a href="callto:+1 959 603 6035">+1 959 603 6035</a></div></div>
                        </aside></div></div></div></div></div><div id="static-area-header-bottom" class="header-bottom static-area"><div class="container"><div class="row"><div class="static-header-logo"><div class="site-branding"><h1 class="site-title image-logo"><a href="index.html" rel="home"><img src="wp-content/uploads/2015/12/logo.png" alt="Financial Vision"></a></h1> </div></div><div class="static-header-menu">
                    <!-- Primary navigation -->
                    <nav class="menu-primary menu" role="navigation" id="menu-primary">

                        <button class="menu-primary_trigger" aria-expanded="false" aria-controls="menu-primary-items">Menu</button><ul id="menu-primary-items" class="menu-items simple-menu"><li id="menu-item-1087" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1085 current_page_item menu-item-1087"><a href="index.html">Home</a></li>
                            <li id="menu-item-1096" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1096"><a href="about-me/index.html">About Me</a></li>
                            <li id="menu-item-1095" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1095"><a href="financial-planning/index.html">Financial Planning</a></li>
                            <li id="menu-item-1097" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1097"><a href="investment-help/index.html">Investment Help</a></li>
                            <li id="menu-item-1086" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1086"><a href="blog/index.html">Advice</a></li>
                            <li id="menu-item-1094" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1094"><a href="contacts/index.html">Contacts</a></li>
                            <li id="menu-item-1109" class="extra-btn menu-item menu-item-type-post_type menu-item-object-page menu-item-1109"><a href="free-consultation/index.html">Free Consultation</a></li>
                        </ul>
                    </nav>

                </div></div></div></div><div id="static-area-showcase-area" class="showcase-area static-area"><div class="container"><div class="row"><div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 static-header-sidebar-2"><div class="sidebar-header-2 widget-area" role="complementary"><aside id="text-3" class="widget widget_text"><h3 class="widget-title">Because Money Doesn’t Come With Instructions</h3>			<div class="textwidget"><h4>Sure, dealing with your
                                    finances can be intimidating.</h4>

                                That's why we take the time to listen to you, learn your goals and then create your plan using John Doe’s philosophies that reflect the latest academic research.</div>
                        </aside></div></div></div></div></div>
</header>



    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
<style type="text/css">.box-328 .inner{background-color:#f5f5f5;}</style>

<footer id="footer" class="site-footer wide" role="contentinfo"><div id="static-area-footer-top" class="footer-top static-area"><div class="container"><div class="row"><div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 static-footer-sidebars"><div class='row'><div class="col-xs-12 col-sm-12"><div class="sidebar-footer-1 widget-area" role="complementary"><aside id="mc4wp_form_widget-2" class="widget widget_mc4wp_form_widget"><h3 class="widget-title">Sign Up</h3><script type="text/javascript">!function(){window.mc4wp||(window.mc4wp={listeners:[],forms:{on:function(n,w){window.mc4wp.listeners.push({event:n,callback:w})}}})}();</script><!-- MailChimp for WordPress v3.0.9 - https://wordpress.org/plugins/mailchimp-for-wp/ --><form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-613" method="post" data-id="613" data-name="" ><div class="mc4wp-form-fields"><p>
                                                <label>Get subscriber only insights &amp; news <br>
                                                    delivered by John Doe</label>
                                            </p>
                                            <p>
                                                <input type="email" name="EMAIL" placeholder="Enter Your E-mail" required />
                                                <input type="submit" class="cherry-btn cherry-btn-primary cherry-btn-medium" value="Submit" />
                                            </p>
                                            <div style="display: none;"><input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" autofill="off" /></div><input type="hidden" name="_mc4wp_timestamp" value="1454509241" /><input type="hidden" name="_mc4wp_form_id" value="613" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /></div><div class="mc4wp-response"></div></form><!-- / MailChimp for WordPress Plugin --></aside></div></div></div></div><div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 static-footer-sidebars-2"><div class='row'><div class="col-xs-12 col-sm-12"><div class="sidebar-footer-2 widget-area" role="complementary"><aside id="text-4" class="widget widget_text"><h3 class="widget-title">Contact Me</h3>			<div class="textwidget"><address class="f_address">
                                            <p><span>E-mail</span><a href="../cdn-cgi/l/email-protection.html#e3a98c8b8da78c86a387868e8c8f8a8d88cd8c9184"><span class="__cf_email__" data-cfemail="511b3e393f153e341135343c3e3d383f3a7f3e2336">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">
                                                        /* <![CDATA[ */!function(){try{var t="currentScript"in document?document.currentScript:function(){for(var t=document.getElementsByTagName("script"),e=t.length;e--;)if(t[e].getAttribute("data-cfhash"))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute("data-cfemail");if(a){for(e="",r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}t.parentNode.removeChild(t);}}catch(u){}}()/* ]]> */</script></a></p>
                                            <p><span>Telephone</span><a href="callto:+1 959 603 6035">+1 959 603 6035</a></p>
                                            <p><span>Adress</span>222 Fashion Lane, Ste. 207 Tustin, CA 92780</p>
                                        </address></div>
                                </aside></div></div></div></div></div></div></div>
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div id="static-area-footer-left" class="footer-left static-area"><div class="container"><div class="row"><div class="static-footer-sidebars-4"><div class="col-xs-12 col-sm-12"><div class="sidebar-footer-4 widget-area" role="complementary"><aside id="text-6" class="widget widget_text">			<div class="textwidget"><p>Investments products and services available only to residents of : Arizona - AZ, California - CA, Hawaii - HI, Idaho - ID, New Jersey - NJ, New Mexico - NM, Oregon - OR, Washington - WA Securities and Investment Advice through John Doe & Company, A registered broker/dealer and Investment Advisor, Member FINRA and SIPC. 101 Serious Road, Fincity, FL 32707 Tel: (959) 603- 6035.| John Doe Financial Advisors is not an affiliate of Wall Street Company.</p>

                                                    All other trademarks and copyrights are the properties of their respective holders.
                                                    This website provides information related to the subjects covered. Before making any financial or legal decisions, a professional should be consulted.</div>
                                            </aside></div></div></div><div class="col-md-12 col-lg-12 static-footer-info"><div class="site-info">copyright &copy; 2016 | <a href="privacy-policy/index.html">Privacy Policy</a></div></div></div></div></div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-lg-push-1">
                    <div id="static-area-footer-right" class="footer-right static-area"><div class="container"><div class="row"><div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 static-footer-sidebars-5"><div class='row'><div class="col-xs-12 col-sm-12"><div class="sidebar-footer-5 widget-area" role="complementary"><aside id="nav_menu-4" class="widget widget_nav_menu"><h3 class="widget-title">Financial Planning</h3><div class="menu-financial-planning-container"><ul id="menu-financial-planning" class="menu"><li id="menu-item-1098" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1098"><a href="financial-planning/index.html#investment-management">Investment Management</a></li>
                                                            <li id="menu-item-1099" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1099"><a href="financial-planning/index.html#retirement-planning">Retirement Planning</a></li>
                                                            <li id="menu-item-1100" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1100"><a href="financial-planning/index.html#long-term-care">Long Term Care</a></li>
                                                            <li id="menu-item-1101" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1101"><a href="financial-planning/index.html#estate-planning">Estate Planning</a></li>
                                                            <li id="menu-item-1102" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1102"><a href="financial-planning/index.html#social-security">Social Security</a></li>
                                                        </ul></div></aside></div></div></div></div><div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 static-footer-sidebars-6"><div class='row'><div class="col-xs-12 col-sm-12"><div class="sidebar-footer-6 widget-area" role="complementary"><aside id="nav_menu-5" class="widget widget_nav_menu"><h3 class="widget-title">Investment Help</h3><div class="menu-investment-help-container"><ul id="menu-investment-help" class="menu"><li id="menu-item-1103" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1103"><a href="investment-help/index.html#wealth-management">Wealth Management</a></li>
                                                            <li id="menu-item-1104" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1104"><a href="investment-help/index.html#retirement-college-savings">Retirement &#038; College</a></li>
                                                            <li id="menu-item-1105" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1105"><a href="investment-help/index.html#business-owners">Savings Business Owners</a></li>
                                                            <li id="menu-item-1106" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1106"><a href="investment-help/index.html#insurance-annuities">Insurance &#038; Annuities</a></li>
                                                            <li id="menu-item-1107" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1107"><a href="investment-help/index.html#cash-credit">Cash &#038; Credit</a></li>
                                                            <li id="menu-item-1108" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1108"><a href="investment-help/index.html#stocks-bonds-mutual-funds">Stocks, Bonds &#038; Mutual Funds</a></li>
                                                        </ul></div></aside></div></div></div></div></div></div></div>
                </div>
            </div></div>
    </div>
</footer><div id="back-top" class=""><a href="#top"></a></div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
