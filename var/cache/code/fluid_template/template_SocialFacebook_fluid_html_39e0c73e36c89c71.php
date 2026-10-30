<?php
class template_SocialFacebook_fluid_html_39e0c73e36c89c71 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/typo3/theme-camino/Resources/Private/Templates/Partials/Icons/SocialFacebook.fluid.html';
    }
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'';
    }
    public function hasLayout(): bool {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->setLocalNamespaces(array (
  'f' => 
  array (
    0 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
));
    }
    
    
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '




<svg aria-hidden="true" class="';

$output0 .= call_user_func_array( function ($var) { if ($var instanceof TYPO3Fluid\Fluid\Core\Parser\UnsafeHTML) { return (string)$var; }return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output0 .= '" width="32" height="32" viewBox="0 0 32 32" fill="none">
    <path d="M28.9995 16.0478C28.9995 8.84174 23.1792 3 15.9997 3C8.82024 3 3 8.84174 3 16.0478C3 22.1666 7.19736 27.3012 12.8595 28.7114V20.0351H10.179V16.0478H12.8595V14.3296C12.8595 9.88869 14.862 7.83028 19.206 7.83028C20.0297 7.83028 21.4508 7.99259 22.0321 8.15439V11.7686C21.7253 11.7363 21.1924 11.7201 20.5304 11.7201C18.399 11.7201 17.5753 12.5306 17.5753 14.6376V16.0478H21.8215L21.092 20.0351H17.5753V29C24.0123 28.2197 29 22.7188 29 16.0478H28.9995Z" fill="currentColor"/>
</svg>


';

    return $output0;
}

}

#