<?php
/* Smarty version 4.3.4, created on 2025-05-01 07:41:12
  from 'module:ps_newproductsviewstemplateshookps_newproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6812c32861c172_26770899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a8df44403a47041b050fac755e17268c2a7c3e7' => 
    array (
      0 => 'module:ps_newproductsviewstemplateshookps_newproducts.tpl',
      1 => 1746022608,
      2 => 'module',
    ),
    '04a381301b2db036ff5e187d7ed0d32f80791b7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\productlist.tpl',
      1 => 1746022609,
      2 => 'file',
    ),
    '4a898839c15bf9d8406612cbd4c7e64a6e3760bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1746022609,
      2 => 'file',
    ),
    '20d252bc76668c6cbcc0fbca1206cee180de8ebf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1746022609,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6812c32861c172_26770899 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\prestashop/themes/classic/modules/ps_newproducts/views/templates/hook/ps_newproducts.tpl -->
<section class="featured-products clearfix mt-3">
  <h2 class="h2 products-section-title text-uppercase">
    Produk baru
  </h2>
  

<div class="products">
            
<div class="js-product product col-xs-12 col-sm-6 col-lg-4 col-xl-3">
  <article class="product-miniature js-product-miniature" data-id-product="2" data-id-product-attribute="0">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        
                      <a href="http://localhost/prestashop/home/2-pecel-ayam.html" class="thumbnail product-thumbnail">
              <picture>
                                                <img
                  src="http://localhost/prestashop/img/p/id-default-home_default.jpg"
                  loading="lazy"
                  width="250"
                  height="250"
                />
              </picture>
            </a>
                  

        <div class="highlighted-informations no-variants">
          
            <a class="quick-view js-quick-view" href="#" data-link-action="quickview">
              <i class="material-icons search">&#xE8B6;</i> Quick view
            </a>
          

          
                      
        </div>
      </div>

      <div class="product-description">
        
                      <h3 class="h3 product-title"><a href="http://localhost/prestashop/home/2-pecel-ayam.html" content="http://localhost/prestashop/home/2-pecel-ayam.html">Pecel Ayam</a></h3>
                  

        
                      <div class="product-price-and-shipping">
              
              

              <span class="price" aria-label="Harga">
                                                  Rp30,00
                              </span>

              

              
            </div>
                  

        
          
<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- begin C:\xampp\htdocs\prestashop/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="2" data-url="http://localhost/prestashop/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>

<!-- end C:\xampp\htdocs\prestashop/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

        
      </div>

      
    <ul class="product-flags js-product-flags">
                    <li class="product-flag new">Baru</li>
                    <li class="product-flag out_of_stock">Out-of-Stock</li>
            </ul>

    </div>
  </article>
</div>

    </div>
  <a class="all-product-link float-xs-left float-md-right h4" href="http://localhost/prestashop/new-products">
    Semua produk baru<i class="material-icons">&#xE315;</i>
  </a>
</section>

<!-- end C:\xampp\htdocs\prestashop/themes/classic/modules/ps_newproducts/views/templates/hook/ps_newproducts.tpl --><?php }
}
