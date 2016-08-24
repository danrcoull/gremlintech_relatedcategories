# gremlintech_relatedcategories
Magento Display a Product.info block for Related Categories / All Product associated category tree

Configure 
---------------------

v 1.0.0 : No current admin config - to choose where to add the block on the product page open app/code/community/gremlintech/relatedcategories/model/observer.php and change the following

```php
if ($_block->getNameInLayout() == 'awarp.content.inside.product') {

            $_child = Mage::app()->getLayout()->createBlock('relatedcategories/categories');
            $_child->setTemplate('gremlintech/relatedcategories/categories.phtml');

            echo $_child->toHtml();
        }
```

replace the if == with the layout name of your block you wish the related categories to display before. 

Example
--------------------------------------
vist [Fashion Threads Boutique](https://www.fashionthreadsboutique.co.uk/mens-winter-coat-fashion-wadded-outdoor-thick-warm-cotton-padded-jacket.html) for an example 
