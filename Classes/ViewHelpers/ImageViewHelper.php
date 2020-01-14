<?php
namespace SIMONKOEHLER\Fallback\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3\CMS\Core\Core\Environment;

class ImageViewHelper extends AbstractViewHelper{

   public function initializeArguments() {
       $this->registerArgument('url', 'string', 'The image URL to check!', false);
       $this->registerArgument('placeholder', 'string', 'Alternative image URL to load, when main URL is invalid!', false);
   }

   public static function renderStatic(
       array $arguments,
       \Closure $renderChildrenClosure,
       RenderingContextInterface $renderingContext
   ) {

       // Set default placeholder image if no placeholder argument was given
       if(!$arguments['url']){
           return 'EXT:fallback/Resources/Public/Images/placeholder.jpg';
       }

       // Set default placeholder image if no placeholder argument was given
       if(!$arguments['placeholder']){
           $arguments['placeholder'] = 'EXT:fallback/Resources/Public/Images/placeholder.jpg';
       }

       // Check public path
       if(file_exists(Environment::getPublicPath().'/'.$arguments['url'])){
           return $arguments['url'];
       }
       else{
           return $arguments['placeholder'];
       }
   }
}
