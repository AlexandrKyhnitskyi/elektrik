<?php

use yii\helpers\Html;

$asset = \app\assets\AppAsset::register($this);

$this->title = $page->title;

$this->params['breadcrumbs'][] = 'О нас';
$this->params['menu_active_item'] = 'about';
?>
<!-- PAGE CONTENT -->
<div class="page-content">
    <div class="container">
        <section>
            <div class="row">
                <div class="col-md-6">
                    <p>Completely monetize cooperative alignments vis-a-vis empowered leadership skills. Assertively empower maintainable intellectual capital with extensive total linkage. Enthusiastically synthesize bleeding-edge intellectual capital after market-driven initiatives. Enthusiastically enhance turnkey architectures before backward-compatible deliverables. Collaboratively drive virtual solutions vis-a-vis multimedia based data. Dynamically transition emerging leadership skills after long-term high-impact human capital. Competently reintermediate 24/365 quality vectors rather than sticky bandwidth. Authoritatively.</p>
                    <p>Professionally facilitate orthogonal leadership whereas customer directed testing procedures. Credibly incubate ubiquitous human capital without efficient expertise. Intrinsicly optimize ubiquitous web-readiness through standards compliant metrics. Intrinsicly drive ethical technologies whereas installed base interfaces. Credibly expedite backward-compatible e-markets before viral opportunities.</p>
                </div>
                <div class="col-md-6">
                    <div class="featured-video">
                        <iframe src="//player.vimeo.com/video/40056491"></iframe>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <h2 class="section-heading">OUR MISSION</h2>
            <p class="lead"><span class="dropcap dropcap-big">P</span>hosfluorescently predominate stand-alone strategic theme areas with resource maximizing resources. Professionally transform end-to-end catalysts for change via impactful e-services.</p>
            <br>
            <h2 class="section-heading">OUR VISION</h2>
            <p class="lead"><span class="dropcap dropcap-big">D</span>istinctively predominate front-end total linkage via user. Professionally synthesize sustainable growth strategies before bricks-and-clicks functionalities. Holisticly synthesize unique intellectual capital whereas ubiquitous users.</p>
            <hr>
        </section>
        <h2 class="section-heading">MEET OUR TEAM</h2>
        <!-- TEAM -->
        <section class="team">
            <div class="section-content">
                <div class="col-md-5">
                    <div class="team-member media">
                        <img src="<?= $asset->baseUrl ?>/img/person1.png" class="media-object img-circle pull-left" alt="" />
                        <div class="media-body">
                            <h3 class="media-heading team-name">Michael Summer</h3>
                            <strong>Executive Director</strong>
                            <hr class="pull-left">
                            <div class="clearfix"></div>
                            <p>Dynamically evolve client-based portals through world-class models. Phosfluorescently simplify cross-platform convergence and multimedia based portals. Rapidiously.</p>
                            <ul class="list-inline social-icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-2">
                    <div class="team-member media">
                        <img src="<?= $asset->baseUrl ?>/img/person2.png" class="media-object img-circle pull-left" alt="" />
                        <div class="media-body">
                            <h3 class="media-heading team-name">Jane Doe</h3>
                            <strong>Art Director</strong>
                            <hr class="pull-left">
                            <div class="clearfix"></div>
                            <p>Dynamically evolve client-based portals through world-class models. Phosfluorescently simplify cross-platform convergence and multimedia based portals. Rapidiously.</p>
                            <ul class="list-inline social-icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="team-member media">
                        <img src="<?= $asset->baseUrl ?>/img/person3.png" class="media-object img-circle pull-left" alt="" />
                        <div class="media-body">
                            <h3 class="media-heading team-name">Cindy Marry</h3>
                            <strong>UI Designer</strong>
                            <hr class="pull-left">
                            <div class="clearfix"></div>
                            <p>Dynamically evolve client-based portals through world-class models. Phosfluorescently simplify cross-platform convergence and multimedia based portals. Rapidiously.</p>
                            <ul class="list-inline social-icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-2">
                    <div class="team-member media">
                        <img src="<?= $asset->baseUrl ?>/img/person4.png" class="media-object img-circle pull-left" alt="" />
                        <div class="media-body">
                            <h3 class="media-heading team-name">Phillips Abraham</h3>
                            <strong>Front-end Developer</strong>
                            <hr class="pull-left">
                            <div class="clearfix"></div>
                            <p>Dynamically evolve client-based portals through world-class models. Phosfluorescently simplify cross-platform convergence and multimedia based portals. Rapidiously.</p>
                            <ul class="list-inline social-icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END TEAM -->
        <!-- OUR CLIENTS -->
        <section class="clients no-margin">
            <div class="container">
                <h2 class="section-heading">OUR CLIENTS</h2>
                <ul class="list-inline list-client-logo">
                    <li>
                        <a href="#"><img src="<?= $asset->baseUrl ?>/img/logo1.png" alt="logo" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="<?= $asset->baseUrl ?>/img/logo2.png" alt="logo" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="<?= $asset->baseUrl ?>/img/logo3.png" alt="logo" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="<?= $asset->baseUrl ?>/img/logo4.png" alt="logo" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="<?= $asset->baseUrl ?>/img/logo5.png" alt="logo" /></a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- END OUR CLIENTS -->
    </div>
</div>
<!-- END PAGE CONTENT -->

<?//= $page->text ?>
