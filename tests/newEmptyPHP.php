<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    design
 * @package     base_default
 * @copyright   Copyright (c) 2006-2015 X.commerce, Inc. (http://www.magento.com)
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
?>
<?php
/**
 * @see Mage_Catalog_Block_Seo_Sitemap_
 */
?>
<?php $_items = $this->getCollection(); ?>
<body class="cms-index-noroute cms-no-route">
<section class="main">
<div class="container">
<div class="row"><!-- col -->
<div class="col-sm-8 col-sm-offset-2">

<ul class="list-unstyled list-links">
  
    <?php $controller_name=Mage::app()->getRequest()->getActionName(); //echo $controller_name; ?>
    <?php if($controller_name=="product"): ?>
            <?php foreach ($_items as $_item): ?>    
                <li><a href="<?php echo $this->getItemUrl($_item) ?>"><?php echo $this->escapeHtml($_item->name) ?></a></li>
             <?php endforeach; ?> 
    <?php elseif ($controller_name=="category") : ?>
        <?php
            $rootcatId= Mage::app()->getStore()->getRootCategoryId();
            $categories = Mage::getModel('catalog/category')->getCategories($rootcatId);
            function  get_categories($categories) {
                $array= '<ul>';
                foreach($categories as $category) {
                    $cat = Mage::getModel('catalog/category')->load($category->getId());
                    $count = $cat->getProductCount();
                    $array .= '<li>'.'<a href="'.Mage::getUrl($cat->getUrlPath()). '">'.$category->getName(). "(".$count.")</a>\n";
                    if($category->hasChildren()) {
                        $children = Mage::getModel('catalog/category')->getCategories($category->getId());
                         $array .=  get_categories($children);
                        }
                     $array .= '</li>';
                }
                return  $array . '</ul>';
            }
            echo  get_categories($categories); ?>
        <?php  endif ?>
</ul>
</div>
</div>
</div>
</section>
</body>