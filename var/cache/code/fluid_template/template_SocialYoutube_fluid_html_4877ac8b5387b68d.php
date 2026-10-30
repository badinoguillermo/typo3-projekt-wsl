<?php
class template_SocialYoutube_fluid_html_4877ac8b5387b68d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getOriginalTemplatePath(): ?string {
        return '/var/www/html/vendor/typo3/theme-camino/Resources/Private/Templates/Partials/Icons/SocialYoutube.fluid.html';
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
    <path d="M16.0004 6C16.0705 6.00001 24.944 6.00227 27.1625 6.59668C28.3913 6.92575 29.36 7.89407 29.6879 9.12305C30.2852 11.3522 30.2855 16 30.2855 16C30.2855 16.0014 30.2851 20.6497 29.6879 22.877C29.36 24.1059 28.3913 25.0742 27.1625 25.4033C24.944 25.9977 16.0705 26 16.0004 26C16.0004 26 7.06618 26.0001 4.83728 25.4033C3.60852 25.0742 2.63979 24.1059 2.31189 22.877C1.71467 20.6481 1.71423 16.0014 1.71423 16C1.71423 16 1.71459 11.3522 2.31189 9.12305C2.63979 7.89411 3.60852 6.92579 4.83728 6.59668C7.06455 5.99991 16.0004 6 16.0004 6ZM13.0775 20.2207L20.5453 16L13.0775 11.7793V20.2207Z" fill="currentColor"/>
</svg>


';

    return $output0;
}

}

#