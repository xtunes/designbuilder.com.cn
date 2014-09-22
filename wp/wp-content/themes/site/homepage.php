<?php
/**
 * Template Name: 首页
 */

get_header(); ?>
    	<div class="clear"></div>
    <!-- <div id="main">
    	<div class="homebanner relative">
    		<a href="/?cat=6" class="btn_try"><img src="/img/btn_try.jpg"></a>
    		<a href="/?page_id=27" class="btn_buy"><img src="/img/btn_buy.jpg"></a>
    	</div>
    	<div class="homefeatured">
    		<a href="/?page_id=58"><img src="/img/web_07.jpg"></a>
    		<a href="/?page_id=64"><img src="/img/web_09.jpg"></a>
    		<a href="/?page_id=66"><img src="/img/web_11.jpg"></a>
    	</div>
    	<div class="homecontent">
    		<div class="news">
    			<img src="/img/title_news.gif">
    			<ul  class="newslist">
					<?php
global $post;
$args = array( 'numberposts' => 9, 'offset'=> 0, 'category' => 18 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
				</ul>
    		</div>
    		<div class="productintro">
    			<img src="/img/title_intro.gif">
    			<div class="content">    			    				
    			     <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>    				
    			</div>    			
    		</div>
    	</div>
    </div> -->

    <div id="ja-containerwrap-fr">
    <div id="ja-container">
    <div id="ja-container2" class="clearfix">

      <div id="ja-mainbody" class="clearfix">

        <!-- BEGIN: CONTENT -->
        <div id="ja-content" class="clearfix">
            
            
            <div id="ja-current-content" class="clearfix">

                


                <table class="contentpaneopen">
                <tbody><tr>
                                    <td class="contentheading" width="100%">
                    DesignBuilder - 建筑仿真如此简单                               </td>
                                </tr>
                </tbody></table>
                
            <table class="contentpaneopen">
                    <tbody><tr>
                <td valign="top" colspan="2">
                <div id="l2-main-slides">
    <!-- Start silder section -->
<div id="wowslider-container1">
<div class="ws_images">
<ul>
    <li><a href="/products/"><img id="wows1_1" src="/img/banners/visualisation-banner1.png" alt="令人惊叹的渲染图像与场地阴影分析" title="令人惊叹的渲染图像与场地阴影分析" /></a>旋转，缩放，浏览你的建筑设计</li>
    <li><a href="/products/"><img id="wows1_2" src="/img/banners/3-D-modeller-banner1.png" alt="创新生产力之快速建模" title="创新生产力之快速建模" /></a>我们的3D建模功能，学得快上手快</li>
    <li><a href="/products/"><img id="wows1_0" src="/img/banners/eplus-graph-banner2.png" alt="DesignBuilder - 让建筑模拟房简单" title="DesignBuilder - 让建筑模拟房简单" /></a>能量与舒适性模拟</li>
    <li><a href="/certification/"><img id="wows1_9" src="/img/banners/certification-banner3.png" alt="最快与最简单的方法通过UK-EPCs与Part-L2认证" title="最快与最简单的方法通过UK-EPCs与Part-L2认证" /></a>快速学习，简单实用</li>
    <li><a href="/products/"><img id="wows1_4" src="/img/banners/daylighting-banner1.png" alt="准确的评价自然采光与视觉舒适性" title="准确的评价自然采光与视觉舒适性" /></a>Reports daylight factors and illuminance using Radiance</li>
    <li><a href="/engineers/"><img id="wows1_5" src="/img/banners/eplus-hvac-banner1.png" alt="使用EnergyPlus高级暖通空调系统仿真" title="使用EnergyPlus高级暖通空调系统仿真" /></a>强大而灵活的E+暖通仿真界面</li>
    <li><a href="/engineers/"><img id="wows1_6" src="/img/banners/cfd-banner1.png" alt="计算并查看气流与3维温度分布" title="计算并查看气流与3维温度分布" /></a>计算流体力学计算建筑内部和周围的空气状态</li>
    <li><a href="/optimisation/"><img id="wows1_7" src="/img/banners/optimise-banner1.png" alt="完善的最优化功能和成本效益计算" title="完善的最优化功能和成本效益计算" /></a>多变量最优化帮我们达到设计目的</li>
</ul>
</div>
<div class="ws_bullets">
<div>
<a href="http://www.designbuilder.com.cn/#" title="令人惊叹的渲染图像与场地阴影分析">2</a>
<a href="http://www.designbuilder.com.cn/#" title="创新生产力之快速建模">3</a>
<a href="http://www.designbuilder.com.cn/#" title="DesignBuilder - 让建筑模拟房简单">1</a>
<a href="http://www.designbuilder.com.cn/#" title="最快与最简单的方法通过UK-EPCs与Part-L2认证">9</a>
<a href="http://www.designbuilder.com.cn/#" title="准确的评价自然采光与视觉舒适性">5</a>
<a href="http://www.designbuilder.com.cn/#" title="使用EnergyPlus高级暖通空调系统仿真">6</a>
<a href="http://www.designbuilder.com.cn/#" title="计算并查看气流与3维温度分布">7</a>
<a href="http://www.designbuilder.com.cn/#" title="完善的最优化功能和成本效益计算">8</a>
</div>
</div>
</div>
<script src="/templates/designbuilderv4/js/wowslider.js" type="text/javascript">
</script>
<script src="/templates/designbuilderv4/js/script.js" type="text/javascript">
</script>
<!-- End slider section -->

    </div>
    <div class="l2-intro-para">
    <p>
    <strong>DesignBuilder </strong>结合了高级的能量模拟核心与市场上最快的建模技术，以此工程师，建筑师，和能源评估师可以设计舒适和节能的建筑。  
    </p>
    </div>
    <!-- Start roles section -->
    <table border="0" cellspacing="0" cellpadding="0" class="dbtab2">
        <tbody>
            <tr>
                <td class="greyhead" width="32%">工程师</td>
                <td width="2%">&nbsp;</td>
                <td class="greyhead" width="32%">建筑师</td>
                <td width="2%">&nbsp;</td>
                <td class="greyhead" width="32%">能源评估中心</td>
            </tr>
            <tr>
                <td>
                <p>
                <a href="/engineers/"><img src="/img/energyplus-logo-100.png" border="0" alt="DesignBuilder for Engineers" title="DesignBuilder for Engineers" hspace="5" vspace="5" width="100" height="68" align="right"></a>
                我们强大的仿真工具可以让你模拟暖通空调系统，天然采光，气流，成本，能量与碳排放，优化你的方案来满足设计目标并给您的顾客最大的利润。
                </p>
                </td>
                <td>&nbsp;</td>
                <td>
                <p>
                <a href="/architects/"><img src="/img/bldg4small.jpg" border="0" alt="DesignBuilder for Architects" title="DesignBuilder for Architects" hspace="5" vspace="5" width="100" height="64" align="right"></a>
                在早期方案设计阶段来评估建筑能源效率和碳排性能。可视化的太阳阴影与建筑浏览可以最大化舒适性，自然采光与自然通风的收益。
                </p>
                </td>
                <td>&nbsp;</td>
                <td>
                <p>
                <a href="/energy-assessors/"><img src="/img/epc-bld-100.png" border="0" alt="DesignBuilder for Energy Assessors" title="DesignBuilder for Energy Assessors" hspace="5" vspace="5" width="100" height="72" align="right"></a>
                使用最快最简单的SBEM来生成UK EPCs和Part-L2建筑节能认证报告，超值且富有竞争力。
                </p>
                </td>
            </tr>
            <tr>
                <td align="center">
                <a href="/engineers/" class="dbs_buttons2 black">了解更多 &gt;&gt;</a>  <br>
                </td>
                <td>&nbsp;</td>
                <td align="center">
                <a href="/architects/" class="dbs_buttons2 black">了解更多 &gt;&gt;</a> <br>
                </td>
                <td>&nbsp;</td>
                <td align="center">
                <a href="/energy-assessors/" class="dbs_buttons2 black">了解更多 &gt;&gt;</a>  
                </td>
            </tr>
        </tbody>
    </table>
                </td>
            </tr>
                    </tbody></table>  
                    <br>
             <table class="contentpaneopen">
                <tbody><tr>
                                    <td class="contentheading" width="100%">
                    产品介绍                               </td>
                                </tr>
                </tbody></table>  
            <div class="productintro">
                <div class="content">                                   
                     <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; // end of the loop. ?>                  
                </div>              
            </div>                            
                
            </div>
            
            
        </div>
        <!-- END: CONTENT -->

            
        </div>
            
            <!-- BEGIN: LEFT COLUMN -->
        <div id="ja-col1">
                    <div class="moduletable">
                                <h3>DesignBuilder Version 4</h3>
                    <ul id="mainlevel"><li><a href="/designbuilderv4更新内容/" class="mainlevel">DesignBuilder v4 更新内容</a></li><li><a href="/升级到v4/" class="mainlevel">升级到V4</a></li></ul>        </div>
                    <div class="moduletable-hilite1">
                                <h3>最新资讯</h3>
                   <ul>
                                    <?php
                   global $post;
                   $args = array( 'numberposts' => 9, 'offset'=> 0, 'category' => 18 );
                   $myposts = get_posts( $args );
                   foreach( $myposts as $post ) :   setup_postdata($post); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                   <?php endforeach; ?>
                                </ul>    
            </div>
            <div class="moduletable-hilite1">
                <h3>DesignBuilder购买模块</h3>
                <ul id="mainlevel"><li><a href="/设计模块/" class="mainlevel">设计模块</a></li><li><a href="/扩展模块/" class="mainlevel">扩展模块</a></li><li><a href="/高级全模块/" class="mainlevel">高级全模块</a></li></ul>
            </div>
                </div>
        <!-- END: LEFT COLUMN -->
        
    </div></div></div>
<?php get_footer(); ?>
