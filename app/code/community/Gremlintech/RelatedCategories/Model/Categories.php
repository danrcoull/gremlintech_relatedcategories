<?php
class Gremlintech_RelatedCategories_Model_Categories extends Mage_Core_Model_Abstract
{

    public function getProduct()
    {
        if($product = Mage::registry('current_product')) {
            return $product;
        }
        return false;
    }

    public function getCategoryArray()
    {
        $category = Mage::getModel('catalog/category');
        $tree = $category->getTreeModel();
        $tree->load();

        $ids = $tree->getCollection()->getAllIds();
        $categories = array();
        if ($ids) {
            foreach ($ids as $id) {
                $category->load($id);
                $categories[$id]['name'] = $category->getName();
                $categories[$id]['path'] = $category->getPath();
            }
        }

        return $categories;
    }

}