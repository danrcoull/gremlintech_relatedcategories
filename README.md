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


If using sass, you can copy the _relatedcategories.scss straight into your theme and remove the original styles.css
using the below in your local.xml

```xml

<catalog_product_view>
    <reference name="head">
        <action method="removeItem"><type>skin_css</type><name>css/gremlintech/related_categories/styles.css</name></action>
    </reference>
</catalog_product_view>

```

Example
--------------------------------------
vist [Fashion Threads Boutique](https://www.fashionthreadsboutique.co.uk/mens-winter-coat-fashion-wadded-outdoor-thick-warm-cotton-padded-jacket.html) for an example 
