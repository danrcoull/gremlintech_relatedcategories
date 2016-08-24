<?php   
class Gremlintech_RelatedCategories_Block_Categories extends Mage_Core_Block_Template{


    public function displayString($id)
    {
        $categories = Mage::getModel('relatedcategories/categories')->getCategoryArray();
        $path = explode('/', $categories[$id]['path']);
        $string = array();
        foreach ($path as $pathId) {
            $url = Mage::getModel('catalog/category')->load($pathId)->getUrl();
            $path =  array();
            $path['name'] = $categories[$pathId]['name'];
            $path['url'] = $url;
            $string[] = $path;
        }


        return array_slice($string,2);
    }

    public function getCollection()
    {
        $output = array();
        if($product = Mage::getModel('relatedcategories/categories')->getProduct())
        {
            $catIds = $product->getCategoryIds();
            foreach($catIds as $id)
            {
                $output[] = $this->displayString($id);
            }
        }


        return $output;
    }



}